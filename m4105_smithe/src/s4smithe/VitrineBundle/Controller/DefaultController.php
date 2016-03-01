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
	use Symfony\Component\BrowserKit\Response;
	use s4smithe\VitrineBundle\Entity\Product;

	class DefaultController extends Controller {

		public function indexAction($name) {
			
			return $this->render('s4smitheVitrineBundle:Default:index.html.twig', array(
				'name' => $name
			));
		}
		
		public function mentionsAction() {			
			return $this->render('s4smitheVitrineBundle:Default:mentions.html.twig');
		}
		
		
		
		
		
		

		public function addProduct() {
			$product = new Product(); // La classe Product créée par l’ORM contient des getters et des setters
			//    pour manipuler tous les attributs spécifiés dans le mapping
			//    objet-relationnel
			$product->setName('A Foo Bar');
			$product->setPrice('19.99');
			$product->setDescription('Lorem ipsum dolor');

			$em = $this->getDoctrine()->getManager();  // * gestionnaire d'entités responsable de la persistance et de la
			//    récupération des objets vers et depuis la base de données
			$em->persist($product);    // * persist indique au gestionnaire d’entités de "gérer" l’objet product
			$em->flush();  // * flush provoque la mise a jour de la BD pour tous les objets suivis par
			//    le gestionnaire d’entités

			return new Response('Produit créé avec id ' . $product->getId());
		}

		public function updateAction($id) {
			$em = $this->getDoctrine()->Manager();
			$product = $em->getRepository('s4smitheVitrineBundle:Product')->find($id);
			if (!$product) {
				throw $this->createNotFoundException('No product found for id ' . $id);
			}
			$product->setName('New product name!');
			$em->flush();
			return $this->redirect($this->generateUrl('homepage'));
		}

	}
	