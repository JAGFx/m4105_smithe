<?php
	/*
		Fichier : DefaultController.php
		Auteur : Camille Persson
		Creation : 08/02/2016
		Modification :
			> 08/02/2016		Mise en place du name + mentions
			> 12/02/2016		Ajout template
/
		Ceci est le controlleur par défaut de l'application Vitrine
	*/
	

	namespace s4smithe\VitrineBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use s4smithe\VitrineBundle\Entity\Panier;
	use s4smithe\VitrineBundle\Entity\Client;
	use s4smithe\VitrineBundle\Entity\Commande;
	use s4smithe\VitrineBundle\Entity\CommandeWorkflow;

	class PanierController extends Controller {

		public function contenuPanierAction() {
			$panier = $this->getSessionPanier();
			$articles = array();
			
			if( !empty($panier->getArticles()) )
				foreach ($panier->getArticles() as $item){
					$article = $this->getDoctrine()->getManager()
						->getRepository('s4smitheVitrineBundle:Product')
						->findOneById($item['id']);
					
					$articles[] = array(
						'article' => $article,
						'qte' => $item['qte']
					);
				}
						
			return $this->render('s4smitheVitrineBundle:Panier:panier.html.twig', array(
				'articles' => $articles,
				'panier' => $panier,
				'total' => $this->getTotalPanier()
			));
		}
	
		public function emptyPanierAction() {
			$panier = $this->getSessionPanier();
			$panier->clearPanier();
			
			return $this->redirect($this->generateUrl('s4smithe_vitrine_contenuPanier'));
		}
		
		public function ajouterUnArticleAction( $articleId, $qte ) {
			$panier = $this->getSessionPanier();
			
			$panier->addArticle( $articleId, $qte );
			
			$this->setSessionPanier($panier);
			
			return $this->redirect($this->generateUrl('s4smithe_vitrine_contenuPanier'));
		}
		
		public function enleverUnArticleAction( $articleId, $qte ) {
			$panier = $this->getSessionPanier();
			
			$panier->removeOneArticle( $articleId, $qte );
			
			$this->setSessionPanier($panier);
			
			return $this->redirect($this->generateUrl('s4smithe_vitrine_contenuPanier'));
		}
		
		public function enleverArticlesAction( $articleId ) {
			$panier = $this->getSessionPanier();
			
			$panier->removeArticles( $articleId );
			
			$this->setSessionPanier($panier);
			
			return $this->redirect($this->generateUrl('s4smithe_vitrine_contenuPanier'));
		}
		
		public function panierInfoHeaderAction() {
			$panier = $this->getSessionPanier();
			
			$user = $this->findUser( $this->getSessionUser() );
			
			return $this->render('s4smitheVitrineBundle:Panier:panierInfo.html.twig', array(
				'total' => $this->getTotalPanier(),
				'nbArticle' =>$panier->getNbArticle(),
				'pseudo' => $user->getName()
			));
		}
		
		public function validationAction() {
			$commande = new Commande();
			$commande->setDate( new \DateTime());
			
			$user = $this->findUser( $this->getSessionUser() );
			$commande->setClient( $user );
			
			$panier = $this->getSessionPanier();
			$articles = array();
			$total = $this->getTotalPanier();
			$nbArticles = $panier->getNbArticle();
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($commande);
			$em->flush();
			
			if( !empty($panier->getArticles()) )
				foreach ($panier->getArticles() as $item){
					$article = $this->getDoctrine()->getManager()
						->getRepository('s4smitheVitrineBundle:Product')
						->findOneById($item['id']);
					
					$ligneCommande = new CommandeWorkflow();
					$ligneCommande->setCommande( $commande );
					$ligneCommande->setProduct( $article );
					$ligneCommande->setPrix( $article->getPrice() );
					$ligneCommande->setQte( $item['qte'] );
					
					$articles[] = array(
						'article' => $article,
						'qte' => $item['qte']
					);
					
					var_dump($ligneCommande->getProduct()->getId());
					
					
					$em->persist($ligneCommande);
					$em->flush();
				}
			
			$this->setSessionPanier( new Panier() );
			
			return $this->render('s4smitheVitrineBundle:Panier:validation.html.twig', array(
					'commande' => $commande,
					'artiles' => $articles,
					'total' => $total,
					'nbArticles' => $nbArticles
			));
		}
		
		
		
		
																																																																																																																																																																																																																																																																																																																																												
		private function getSessionPanier(){
			$session = $this->getRequest()->getSession();
			
			return $session->get('panier', new Panier() );
		}
		
		private function getSessionUser(){
			$session = $this->getRequest()->getSession();
			
			return $session->get('userId', '-1' );
		}
		
		private function setSessionPanier( $panier ) {
			$session = $this->getRequest()->getSession();
			$session->set('panier', $panier);
		}
		
		private function getTotalPanier(){
			$total = 0;
			$panier = $this->getSessionPanier();
			
			if( !empty($panier->getArticles()) )
				foreach ($panier->getArticles() as $item){
					$article = $this->getDoctrine()->getManager()
						->getRepository('s4smitheVitrineBundle:Product')
						->findOneById($item['id']);
					
					$total += $article->getPrice() * $item['qte'];
				}
			
			return $total;
		}
		
		private function findUser($id){
			$user = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Client')
				->findOneById($id);
			
			if (!$user) {
				$user = new Client();
				$user->setName('Inconus');																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				
			}
			
			return $user;
		}
	}
