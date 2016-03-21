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

			$listProductPop = $this->getDoctrine()->getManager()
				->getRepository( 's4smitheVitrineBundle:Product' )
				->findAllBetterSales();
			
			return $this->render('s4smitheVitrineBundle:Default:index.html.twig', array(
				'name'           => $name,
				'listProductPop' => $listProductPop
			));
		}
		
		public function mentionsAction() {			
			return $this->render('s4smitheVitrineBundle:Default:mentions.html.twig');
		}

	}
