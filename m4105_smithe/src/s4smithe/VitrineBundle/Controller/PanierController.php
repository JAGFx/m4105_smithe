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

	use s4smithe\VitrineBundle\Entity\Client;
	use s4smithe\VitrineBundle\Entity\Commande;
	use s4smithe\VitrineBundle\Entity\LigneCommande;
	use s4smithe\VitrineBundle\Entity\Panier;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	/**
	 * Class PanierController
	 *
	 * @package s4smithe\VitrineBundle\Controller
	 */
	class PanierController extends Controller {

		/**
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function contenuPanierAction() {
			$panier = $this->getSessionPanier();
			$articles = array();
			
			if ( !empty( $panier->getArticles() ) ) {
				foreach ( $panier->getArticles() as $item ) {
					$article = $this->getArticleObj( $item[ 'id' ] );
					
					$articles[] = array(
						'article' => $article,
						'qte'     => $item[ 'qte' ]
					);
				}
			}

			return $this->render(
				's4smitheVitrineBundle:Panier:panier.html.twig',
				array(
					'articles' => $articles,
					'panier'   => $panier,
					'total'    => $this->getTotalPanier()
				)
			);
		}

		/**
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse
		 */
		public function emptyPanierAction() {
			$panier = $this->getSessionPanier();
			$panier->clearPanier();
			
			return $this->redirectToRoute( 's4smithe_vitrine_contenuPanier' );
		}
		
		/**
		 * @param $articleId
		 * @param $qte
		 *
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse
		 */
		public function ajouterUnArticleAction( $articleId, $qte ) {
			$panier = $this->getSessionPanier();
			
			$added = $panier->addArticle( $this->getArticleObj( $articleId ), $qte );
			if ( $added ) {
				$message = array(
					'title'   => "Article ajouté",
					'message' => 'L\'article à bien été ajoutét'
				);
			} else {
				$message = array(
					'title'   => "Ajout impossible",
					'message' => 'Le stock de l\'article est insuffisant'
				);
			}
			
			$this->setSessionPanier( $panier );

			$this->getRequest()->getSession()->getFlashBag()->add( 'message', $message );

			return $this->redirectToRoute( 's4smithe_vitrine_contenuPanier' );
		}
		
		/**
		 * @param $articleId
		 * @param $qte
		 *
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse
		 */
		public function enleverUnArticleAction( $articleId, $qte ) {
			$panier = $this->getSessionPanier();
			
			$panier->removeOneArticle( $articleId, $qte );
			
			$this->setSessionPanier( $panier );
			
			return $this->redirectToRoute(
				's4smithe_vitrine_contenuPanier', array(
					'message' => array()
				)
			);
		}
		
		/**
		 * @param $articleId
		 *
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse
		 */
		public function enleverArticlesAction( $articleId ) {
			$panier = $this->getSessionPanier();
			
			$panier->removeArticles( $articleId );
			
			$this->setSessionPanier( $panier );
			
			return $this->redirectToRoute(
				's4smithe_vitrine_contenuPanier', array(
					'message' => array()
				)
			);
		}
		
		/**
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function panierInfoHeaderAction() {
			$panier = $this->getSessionPanier();
			
			$sessionUser = $this->getSessionUser();
			$userConnected = ( $sessionUser >= 0 ) ? true : false;
			
			return $this->render(
				's4smitheVitrineBundle:Panier:panierInfo.html.twig',
				array(
					'total'         => $this->getTotalPanier(),
					'nbArticle'     => $panier->getNbArticle(),
					'userConnected' => $userConnected
				)
			);
		}

		/**
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function validationAction() {
			// Création d'une commande pour l'Utilisateur
			$user = $this->findUser( $this->getSessionUser() );
			$commande = new Commande( $user );
			$prixCommande = 0;
			
			// Données panier
			$panier = $this->getSessionPanier();
			$articles = array();
			$total = $this->getTotalPanier();
			$nbArticles = $panier->getNbArticle();
			
			
			$em = $this->getDoctrine()->getManager();
			$em->persist( $commande );

			foreach ( $panier->getArticles() as $item ) {
				// Objet Product récupérer avec l'ID de l'item
				$article = $this->getArticleObj( $item[ 'id' ] );

				// Création d'une ligne de commande
				$ligneCommande = new LigneCommande( $commande, $article, $item[ 'qte' ] );

				// Génération de chaque ligne pour la validation de la commande
				$articles[] = array(
					'article' => $article,
					'qte'     => $item[ 'qte' ]
				);
				$prixCommande += $article->getPrice();

				$em->persist( $ligneCommande );
			}

			$commande->setPrix( $prixCommande );
			$em->flush();
			
			// Création d'un nouveau panier vide => Commande validé
			$this->setSessionPanier( new Panier() );
			
			return $this->render(
				's4smitheVitrineBundle:Panier:validation.html.twig',
				array(
					'commande'   => $commande,
					'articles'   => $articles,
					'total'      => $total,
					'nbArticles' => $nbArticles
				)
			);
		}
		
		
		/**
		 * @return mixed
		 */
		private function getSessionPanier() {
			$session = $this->getRequest()->getSession();
			
			return $session->get( 'panier', new Panier() );
		}
		
		/**
		 * @param $panier
		 */
		private function setSessionPanier( $panier ) {
			$session = $this->getRequest()->getSession();
			$session->set( 'panier', $panier );
		}
		
		/**
		 * @return int
		 */
		private function getSessionUser() {
			$session = $this->getRequest()->getSession();
			
			return $session->get( 'userId', -1 );
		}

		/**
		 * @param $id
		 *
		 * @return mixed
		 */
		private function getArticleObj( $id ) {
			return $this->getDoctrine()->getManager()
				->getRepository( 's4smitheVitrineBundle:Product' )
				->findOneById( $id );
		}


		/**
		 * @return int
		 */
		private function getTotalPanier() {
			$total = 0;
			$panier = $this->getSessionPanier();
			
			if ( !empty( $panier->getArticles() ) ) {
				foreach ( $panier->getArticles() as $item ) {
					$article = $this->getDoctrine()->getManager()
						->getRepository( 's4smitheVitrineBundle:Product' )
						->findOneById( $item[ 'id' ] );
					
					$total += $article->getPrice() * $item[ 'qte' ];
				}
			}
			
			return $total;
		}
		
		/**
		 * @param $id
		 *
		 * @return Client
		 */
		private function findUser( $id ) {
			$user = $this->getDoctrine()->getManager()
				->getRepository( 's4smitheVitrineBundle:Client' )
				->findOneById( $id );
			
			if ( !$user ) {
				$user = new Client();
				$user->setName( 'Inconus' );
			}
			
			return $user;
		}
	}
