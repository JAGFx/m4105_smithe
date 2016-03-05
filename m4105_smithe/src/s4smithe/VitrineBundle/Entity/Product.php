<?php

	namespace s4smithe\VitrineBundle\Entity;

	/**
	 * Product
	 */
	class Product {

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
		 * @return Product
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
		 * Set price
		 *
		 * @param string $price
		 * @return Product
		 */
		public function setPrice($price) {
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
		 * @return Product
		 */
		public function setDescription($description) {
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
		 * @var \s4smithe\VitrineBundle\Entity\Category
		 */
		private $category;

		/**
		 * Set category
		 *
		 * @param \s4smithe\VitrineBundle\Entity\Category $category
		 * @return Product
		 */
		public function setCategory(\s4smithe\VitrineBundle\Entity\Category $category = null) {
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
		 * @var \s4smithe\VitrineBundle\Entity\Marque
		 */
		private $marque;

		/**
		 * Set marque
		 *
		 * @param \s4smithe\VitrineBundle\Entity\Marque $marque
		 * @return Product
		 */
		public function setMarque(\s4smithe\VitrineBundle\Entity\Marque $marque = null) {
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

	}
