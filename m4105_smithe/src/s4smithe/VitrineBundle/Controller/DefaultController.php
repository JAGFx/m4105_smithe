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

	class DefaultController extends Controller {

		public function indexAction($name) {
			$produits = array(
				array(
					'name' => 'Un premiere aritcicle',
					'price' => 24.25
				),
				array(
					'name' => 'Un deux aritcicle',
					'price' => 45.96
				),
				array(
					'name' => 'Un trois aritcicle',
					'price' => 74.25
				),
				array(
					'name' => 'Un quatre aritcicle',
					'price' => 102.36
				),
				array(
					'name' => 'Un cinq aritcicle',
					'price' => 15.33
				),
				array(
					'name' => 'Un sixte aritcicle',
					'price' => 9.54
				),
			);
			
			return $this->render('s4smitheVitrineBundle:Default:index.html.twig', array('name' => $name, 'produits' => $produits));
		}
		
		public function mentionsAction(){
			return $this->render('s4smitheVitrineBundle:Default:mentions.html.twig');
		}

	}
	