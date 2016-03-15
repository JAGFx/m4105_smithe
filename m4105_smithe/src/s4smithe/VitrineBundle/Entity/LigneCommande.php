<?php

	namespace s4smithe\VitrineBundle\Entity;

	/**
	 * LigneCommande
	 */
	class LigneCommande {

		/**
		 * @var integer
		 */
		private $qte;

		/**
		 * @var float
		 */
		private $prix;

		/**
		 * @var \s4smithe\VitrineBundle\Entity\Product
		 */
		private $product;

		/**
		 * @var \s4smithe\VitrineBundle\Entity\Commande
		 */
		private $commande;

		/**
		 * LigneCommande constructor.
		 *
		 * @param Commande $commande
		 * @param Product  $product
		 * @param          $qte
		 */
		public function __construct(
			\s4smithe\VitrineBundle\Entity\Commande $commande,
			\s4smithe\VitrineBundle\Entity\Product $product,
			$qte
		) {
			$this->setCommande( $commande );
			$this->setProduct( $product );
			$this->setQte( $qte );
			$this->setPrix( $product->getPrice() );
		}
		
		/**
		 * Set qte
		 *
		 * @param integer $qte
		 *
		 * @return LigneCommande
		 */
		public function setQte( $qte ) {
			$this->qte = $qte;

			return $this;
		}

		/**
		 * Get qte
		 *
		 * @return integer
		 */
		public function getQte() {
			return $this->qte;
		}

		/**
		 * Set prix
		 *
		 * @param float $prix
		 *
		 * @return LigneCommande
		 */
		public function setPrix( $prix ) {
			$this->prix = $prix;

			return $this;
		}

		/**
		 * Get prix
		 *
		 * @return float
		 */
		public function getPrix() {
			return $this->prix;
		}

		/**
		 * Set product
		 *
		 * @param \s4smithe\VitrineBundle\Entity\Product $product
		 *
		 * @return LigneCommande
		 */
		public function setProduct( \s4smithe\VitrineBundle\Entity\Product $product ) {
			$this->product = $product;

			return $this;
		}

		/**
		 * Get product
		 *
		 * @return \s4smithe\VitrineBundle\Entity\Product
		 */
		public function getProduct() {
			return $this->product;
		}

		/**
		 * Set commande
		 *
		 * @param \s4smithe\VitrineBundle\Entity\Commande $commande
		 *
		 * @return LigneCommande
		 */
		public function setCommande( \s4smithe\VitrineBundle\Entity\Commande $commande ) {
			$this->commande = $commande;

			return $this;
		}

		/**
		 * Get commande
		 *
		 * @return \s4smithe\VitrineBundle\Entity\Commande
		 */
		public function getCommande() {
			return $this->commande;
		}

		/**
		 * @var string
		 */
		private $procuct;


		/**
		 * Set procuct
		 *
		 * @param string $procuct
		 *
		 * @return LigneCommande
		 */
		public function setProcuct( $procuct ) {
			$this->procuct = $procuct;

			return $this;
		}

		/**
		 * Get procuct
		 *
		 * @return string
		 */
		public function getProcuct() {
			return $this->procuct;
		}
	}
