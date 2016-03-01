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

	class CategorieController extends Controller {

		public function listeCategorieAction() {
			$categories = $this->findAllCtge();
			
			return $this->render('s4smitheVitrineBundle:Categorie:liste.html.twig', array(
				'categories' => $categories
			));
		}
		
		public function listeCategorieFooterAction() {
			$categories = $this->findAllCtge();
			
			return $this->render('s4smitheVitrineBundle:Categorie:listeCategorieFooter.html.twig', array(
				'categories' => $categories
			));
		}
		
		public function articlesParCategorieAction( $catId ) {
			$catID = $this->findCtge($catId);
			$produits = $catID->getProducts();
			
			return $this->render('s4smitheVitrineBundle:Categorie:articlesParCategorie.html.twig', array(
				'categorie' => $catID, 
				'produits' => $produits)
			);
		}
		
		
		
		
		
		public function findAllCtge(){
			$ctges = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Category')
				->findAll();
			
			if (!$ctges) {
				throw $this->createNotFoundException('Produit non trouvé avec id ');
			}
			
			return $ctges;
		}
		
		public function findCtge($id){
			$ctge = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Category')
				->findOneById($id);
			
			if (!$ctge) {
				throw $this->createNotFoundException('Produit non trouvé avec id ' . $id);
			}
			
			return $ctge;
		}
	}
	