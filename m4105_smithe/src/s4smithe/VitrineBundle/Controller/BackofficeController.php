<?php

	namespace s4smithe\VitrineBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	/**
	 * Class BackofficeController
	 *
	 * @package s4smithe\VitrineBundle\Controller
	 */
	class BackofficeController extends Controller {
		/**
		 * @param $name
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function indexAction() {
			return $this->render( "s4smitheVitrineBundle:Backoffice:index.html.twig" );
		}
	}
