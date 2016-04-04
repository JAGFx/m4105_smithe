<?php

	/*
	 * Fichier : Product.php
	 * Auteur: SMITH Emmanuel
	 * Création: 16/02/2016
	 * Modification: 22/03/2016
	 *
	 * Entitée Product
	 */


	namespace s4smithe\VitrineBundle\Entity;

	use Symfony\Component\HttpFoundation\File\File;

	/**
	 * Product
	 */
	class Product {

		const PATH_IMAGE = '../../uploads/products/';

		/**
		 * @var integer
		 */
		private $id;

		/**
		 * @var string
		 */
		private $name;

		/**
		 * @var string
		 */
		private $price;

		/**
		 * @var string
		 */
		private $description;

		/**
		 * @var \s4smithe\VitrineBundle\Entity\Category
		 */
		private $category;

		/**
		 * @var \s4smithe\VitrineBundle\Entity\Marque
		 */
		private $marque;

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
		 *
		 * @return Product
		 */
		public function setName( $name ) {
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
		 * Set price
		 *
		 * @param string $price
		 *
		 * @return Product
		 */
		public function setPrice( $price ) {
			$this->price = $price;

			return $this;
		}

		/**
		 * Get price
		 *
		 * @return string
		 */
		public function getPrice() {
			return $this->price;
		}

		/**
		 * Set description
		 *
		 * @param string $description
		 *
		 * @return Product
		 */
		public function setDescription( $description ) {
			$this->description = $description;

			return $this;
		}

		/**
		 * Get description
		 *
		 * @return string
		 */
		public function getDescription() {
			return $this->description;
		}

		/**
		 * Set category
		 *
		 * @param \s4smithe\VitrineBundle\Entity\Category $category
		 *
		 * @return Product
		 */
		public function setCategory( \s4smithe\VitrineBundle\Entity\Category $category = null ) {
			$this->category = $category;

			return $this;
		}

		/**
		 * Get category
		 *
		 * @return \s4smithe\VitrineBundle\Entity\Category
		 */
		public function getCategory() {
			return $this->category;
		}

		/**
		 * Set marque
		 *
		 * @param \s4smithe\VitrineBundle\Entity\Marque $marque
		 *
		 * @return Product
		 */
		public function setMarque( \s4smithe\VitrineBundle\Entity\Marque $marque = null ) {
			$this->marque = $marque;

			return $this;
		}

		/**
		 * Get marque
		 *
		 * @return \s4smithe\VitrineBundle\Entity\Marque
		 */
		public function getMarque() {
			return $this->marque;
		}

		/**
		 * @var integer
		 */
		private $stock = 0;


		/**
		 * Set stock
		 *
		 * @param integer $stock
		 *
		 * @return Product
		 */
		public function setStock( $stock ) {
			$this->stock = $stock;

			return $this;
		}

		/**
		 * Get stock
		 *
		 * @return integer
		 */
		public function getStock() {
			return $this->stock;
		}

		/**
		 * @return bool
		 */
		public function onStock() {
			return ( $this->getStock() > 0 ) ? true : false;
		}

		/**
		 * @return string
		 */
		public function getPathImage() {
			return \s4smithe\VitrineBundle\Entity\Product::PATH_IMAGE . $this->getImage();
		}


		/**
		 * @var
		 */
		private $image;

		/**
		 * @return mixed
		 */
		public function getImage() {
			return $this->image;
		}

		/**
		 * @param mixed $image
		 */
		public function setImage( $image = null ) {
			$this->image = $image;
		}

		/**
		 * @var
		 */
		private $file;

		/**
		 * @return mixed
		 */
		public function getFile() {
			return $this->file;
		}

		/**
		 * @param File|null $file
		 */
		public function setFile( File $file = null ) {
			$this->file = $file;
		}
	}
