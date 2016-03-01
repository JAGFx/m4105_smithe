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
						'name' => $article->getName(),
						'qte' => $item['qte'],
						'prixU' => $article->getPrice(),
					);
				}
						
			return $this->render('s4smitheVitrineBundle:Panier:panier.html.twig', array(
				'panier' => $articles,
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
		
		public function panierInfoHeaderAction() {
			$panier = $this->getSessionPanier();
			
			return $this->render('s4smitheVitrineBundle:Panier:panierInfo.html.twig', array(
				'total' => $this->getTotalPanier(),
				'nbArticle' =>$panier->getNbArticle()
			));
		}
		
		
		
		
		
		private function getSessionPanier(){
			$session = $this->getRequest()->getSession();
			//$session->clear();
			
			return $session->get('panier', new Panier() );
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
	}
	