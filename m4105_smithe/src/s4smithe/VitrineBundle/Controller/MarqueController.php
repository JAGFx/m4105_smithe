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

	class MarqueController extends Controller {
		
		public function listeMarqueAction() {
			$marques = $this->findAllMarque();
			
			return $this->render('s4smitheVitrineBundle:Marque:listeMarque.html.twig', array(
				'marques' => $marques
			));
		}

		public function listeMarqueFooterAction() {
			$marques = $this->findAllMarque();
			
			return $this->render('s4smitheVitrineBundle:Marque:listeMarquesFooter.html.twig', array(
				'marques' => $marques
			));
		}
		
		public function articlesParMarqueAction( $markId ) {
			$markObj = $this->findMarque($markId);
			
			return $this->render('s4smitheVitrineBundle:Default:articlesParFiltre.html.twig', array(
				'filter' => $markObj
			));
		}
		
		
		
		
		
	
		public function findAllMarque(){
			$marque = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Marque')
				->findAllOrderedByName();
			
			if (!$marque) {
				throw $this->createNotFoundException('Produit non trouvé avec id ');
			}
			
			return $marque;
		}
		
		public function findMarque($id){
			$mark = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Marque')
				->findOneById($id);
			
			if (!$mark) {
				throw $this->createNotFoundException('Produit non trouvé avec id ' . $id);
			}
			
			return $mark;
		}
	}
	