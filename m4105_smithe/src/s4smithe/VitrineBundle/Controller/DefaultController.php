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
			$categories = $this->findAllCtge();
			
			return $this->render('s4smitheVitrineBundle:Default:index.html.twig', array(
				'name' => $name,
				'categories' => $categories
			));
		}
		
		public function catalogueAction() {
			$produits = $this->findAllProduct();
			$categories = $this->findAllCtge();

			return $this->render('s4smitheVitrineBundle:Default:catalogue.html.twig', array(
				'produits' => $produits,
				'categories' => $categories
			));
		}
		
		public function mentionsAction() {
			$categories = $this->findAllCtge();
			
			return $this->render('s4smitheVitrineBundle:Default:mentions.html.twig', array(
				'categories' => $categories
			));
		}
		
		public function articlesParCategorieAction( $catId ) {
			$catID = $this->findCtge($catId);
			$produits = $catID->getProducts();
			$categories = $this->findAllCtge();
			
			return $this->render('s4smitheVitrineBundle:Default:articlesParCategorie.html.twig', array(
				'categorie' => $catID, 
				'categories' => $categories,
				'produits' => $produits)
			);
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

		public function findAllProduct() {
			$product = $this->getDoctrine()->getManager()
				->getRepository('s4smitheVitrineBundle:Product')
				->findAll();
			
			if (!$product) {
				throw $this->createNotFoundException('Produit non trouvé avec id ');
			}
			
			return $product;
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
	