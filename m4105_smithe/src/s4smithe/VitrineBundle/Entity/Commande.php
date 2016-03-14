<?php

	namespace s4smithe\VitrineBundle\Entity;

	/**
	 * Commande
	 */
	class Commande {

		/**
		 * @var integer
		 */
		private $id;

		/**
		 * @var \DateTime
		 */
		private $date;

		/**
		 * @var boolean
		 */
		private $etat = false;

		/**
		 * @var \s4smithe\VitrineBundle\Entity\Client
		 */
		private $client;
		
		public function __construct( \s4smithe\VitrineBundle\Entity\Client $client ) {
			$this->setDate( new \DateTime() );
			$this->setClient( $client );
		}


		/**
		 * Get id
		 *
		 * @return integer
		 */
		public function getId() {
			return $this->id;
		}

		/**
		 * Set date
		 *
		 * @param \DateTime $date
		 *
		 * @return Commande
		 */
		public function setDate( $date ) {
			$this->date = $date;

			return $this;
		}

		/**
		 * Get date
		 *
		 * @return \DateTime
		 */
		public function getDate() {
			return $this->date;
		}

		/**
		 * Set etat
		 *
		 * @param boolean $etat
		 *
		 * @return Commande
		 */
		public function setEtat( $etat ) {
			$this->etat = $etat;

			return $this;
		}

		/**
		 * Get etat
		 *
		 * @return boolean
		 */
		public function getEtat() {
			return $this->etat;
		}

		/**
		 * Set client
		 *
		 * @param \s4smithe\VitrineBundle\Entity\Client $client
		 *
		 * @return Commande
		 */
		public function setClient( \s4smithe\VitrineBundle\Entity\Client $client = null ) {
			$this->client = $client;

			return $this;
		}

		/**
		 * Get client
		 *
		 * @return \s4smithe\VitrineBundle\Entity\Client
		 */
		public function getClient() {
			return $this->client;
		}

		/**
		 * @var \Doctrine\Common\Collections\Collection
		 */
		private $lignesommandes;


		/**
		 * Add lignesommandes
		 *
		 * @param \s4smithe\VitrineBundle\Entity\LigneCommande $lignesommandes
		 *
		 * @return Commande
		 */
		public function addLignesommande( \s4smithe\VitrineBundle\Entity\LigneCommande $lignesommandes ) {
			$this->lignesommandes[] = $lignesommandes;

			return $this;
		}

		/**
		 * Remove lignesommandes
		 *
		 * @param \s4smithe\VitrineBundle\Entity\LigneCommande $lignesommandes
		 */
		public function removeLignesommande( \s4smithe\VitrineBundle\Entity\LigneCommande $lignesommandes ) {
			$this->lignesommandes->removeElement( $lignesommandes );
		}

		/**
		 * Get lignesommandes
		 *
		 * @return \Doctrine\Common\Collections\Collection
		 */
		public function getLignesommandes() {
			return $this->lignesommandes;
		}

		public function getPrixCommande() {
			$total = 0;

			foreach ( $this->getLignesommandes() as $ligne ) {
				$total += $ligne->getPrix();
			}

			return $total;
		}
	}
