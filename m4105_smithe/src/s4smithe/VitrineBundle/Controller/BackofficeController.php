<?php

	/*
	 * Fichier : BackofficeController.php
	 * Auteur: SMITH Emmanuel
	 * Création: 15/03/2016
	 * Modification: 22/03/2016
	 *
	 * Controôleur pour la gestion du Back-office
	 */

	namespace s4smithe\VitrineBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	/**
	 * Class BackofficeController
	 *
	 * @package s4smithe\VitrineBundle\Controller
	 */
	class BackofficeController extends Controller {

		/**
		 * Page d'accueil du Back-office
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function indexAction() {
			return $this->render( "s4smitheVitrineBundle:Backoffice:index.html.twig" );
		}
	}
