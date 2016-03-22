<?php

	/*
	 * Fichier : Marque.php
	 * Auteur: SMITH Emmanuel
	 * Création: 04/03/2016
	 * Modification: 22/03/2016
	 *
	 * Entitée Marque
	 */

	namespace s4smithe\VitrineBundle\Entity;

	/**
	 * Marque
	 */
	/**
	 * Class Marque
	 *
	 * @package s4smithe\VitrineBundle\Entity
	 */
	class Marque {

		/**
		 * @var int
		 */
		private $id;

		/**
		 * @var string
		 */
		private $name;

		/**
		 * Get id
		 *
		 * @return integer 
		 */
		public function getId() {
			return $this->id;
		}

		/**
		 * Set name
		 *
		 * @param string $name
		 * @return Marque
		 */
		public function setName($name) {
			$this->name = $name;

			return $this;
		}

		/**
		 * Get name
		 *
		 * @return string 
		 */
		public function getName() {
			return $this->name;
		}

		/**
		 * @var \Doctrine\Common\Collections\Collection
		 */
		private $products;

		/**
		 * Constructor
		 */
		public function __construct() {
			$this->products = new \Doctrine\Common\Collections\ArrayCollection();
		}

		/**
		 * Add products
		 *
		 * @param \s4smithe\VitrineBundle\Entity\Product $products
		 * @return Marque
		 */
		public function addProduct(\s4smithe\VitrineBundle\Entity\Product $products) {
			$this->products[] = $products;

			return $this;
		}

		/**
		 * Remove products
		 *
		 * @param \s4smithe\VitrineBundle\Entity\Product $products
		 */
		public function removeProduct(\s4smithe\VitrineBundle\Entity\Product $products) {
			$this->products->removeElement($products);
		}

		/**
		 * Get products
		 *
		 * @return \Doctrine\Common\Collections\Collection 
		 */
		public function getProducts() {
			return $this->products;
		}

		/**
		 * @return string
		 */
		public function __toString() { // renvoyer une chaîne qui identifie de manière unique l’entité
			return $this->getName(); // si l’attribut Intitule est unique pour chaque catégorie...
		}

	}
