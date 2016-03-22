<?php
	/*
	 * Fichier : CatalogueController.php
	 * Auteur: SMITH Emmanuel
	 * Création: 03/03/2016
	 * Modification: 22/03/2016
	 *
	 * Controôleur pour la gestion du Catalogue
	 */
	

	namespace s4smithe\VitrineBundle\Controller;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	/**
	 * Class CatalogueController
	 *
	 * @package s4smithe\VitrineBundle\Controller
	 */
	class CatalogueController extends Controller {


		/**
		 *  Liste tous les produits de la BDD
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function indexAction() {
			$produits = $this->findAllProduct();

			return $this->render('s4smitheVitrineBundle:Catalogue:catalogue.html.twig', array(
				'produits' => $produits
			));
		}
		
		
		/**
		 * Recherche des articles dans la BDD
		 *
		 * @return array
		 */
		private function findAllProduct() {
			$product = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Product')
				->findAllOrderedByName();
			
			if (!$product) {
				throw $this->createNotFoundException( 'Pas d\'article disponible ' );
			}
			
			return $product;
		}

	}
