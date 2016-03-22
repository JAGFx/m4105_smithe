<?php

	/*
	 * Fichier : DefaultController.php
	 * Auteur: SMITH Emmanuel
	 * Création: 09/03/2016
	 * Modification: 22/03/2016
	 *
	 * Controôleur par défaut de l'Application
	 */

	namespace s4smithe\VitrineBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	/**
	 * Class DefaultController
	 *
	 * @package s4smithe\VitrineBundle\Controller
	 */
	class DefaultController extends Controller {

		/**
		 * @param $name
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function indexAction( $name ) {

			$listProductPop = $this->getDoctrine()->getManager()
				->getRepository( 's4smitheVitrineBundle:Product' )
				->findAllBetterSales();

			$listMarquePop = $this->getDoctrine()->getManager()
				->getRepository( 's4smitheVitrineBundle:Marque' )
				->findAllPopular();
			
			return $this->render('s4smitheVitrineBundle:Default:index.html.twig', array(
				'name'           => $name,
				'listProductPop' => $listProductPop,
				'listMarquePop'  => $listMarquePop
			));
		}
		
		/**
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function mentionsAction() {
			return $this->render('s4smitheVitrineBundle:Default:mentions.html.twig');
		}

	}
