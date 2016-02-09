<?php

	namespace s4smithe\VitrineBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	class DefaultController extends Controller {

		public function indexAction($name) {
			return $this->render('s4smitheVitrineBundle:Default:index.html.twig', array('name' => $name));
		}
		
		public function mentionsAction(){
			return $this->render('s4smitheVitrineBundle:Default:mentions.html.twig');
		}

	}
	