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

	class CatalogueController extends Controller {

		public function indexAction() {			
			$produits = $this->findAllProduct();

			return $this->render('s4smitheVitrineBundle:Catalogue:catalogue.html.twig', array(
				'produits' => $produits
			));
		}
		
		
		
		
		public function findAllProduct() {
			$product = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Product')
				->findAllOrderedByName();
			
			if (!$product) {
				throw $this->createNotFoundException('Produit non trouvé avec id ');
			}
			
			return $product;
		}

	}
	