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
			
			return $this->render('s4smitheVitrineBundle:Categorie:listeCategorie.html.twig', array(
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
			$catObj = $this->findCtge($catId);
			
			return $this->render('s4smitheVitrineBundle:Default:articlesParFiltre.html.twig', array(
				'filter' => $catObj
			));
		}
		
		
		
		
		
		private function findAllCtge(){
			$ctges = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Category')
				->findAllOrderedByName();
			
			if (!$ctges) {
				throw $this->createNotFoundException('Produit non trouvé avec id ');
			}
			
			return $ctges;
		}
		
		private function findCtge($id){
			$ctge = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Category')
				->findOneById($id);
			
			if (!$ctge) {
				throw $this->createNotFoundException('Produit non trouvé avec id ' . $id);
			}
			
			return $ctge;
		}
	}
