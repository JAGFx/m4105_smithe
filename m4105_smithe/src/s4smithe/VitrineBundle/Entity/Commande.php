<?php

	/*
	 * Fichier : Commande.php
	 * Auteur: SMITH Emmanuel
	 * Création: 19/03/2016
	 * Modification: 22/03/2016
	 *
	 * Entitée Commande
	 */

	namespace s4smithe\VitrineBundle\Entity;

	use Doctrine\Common\Collections\ArrayCollection;

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

		/**
		 * Commande constructor.
		 *
		 * @param Client $client
		 */
		public function __construct( \s4smithe\VitrineBundle\Entity\Client $client = null ) {
			$this->lignesommandes = new ArrayCollection();
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
		private $lignecommandes;


		/**
		 * Add lignecommandes
		 *
		 * @param \s4smithe\VitrineBundle\Entity\LigneCommande $lignecommandes
		 *
		 * @return Commande
		 */
		public function addLignecommande( \s4smithe\VitrineBundle\Entity\LigneCommande $lignecommandes ) {
			$this->lignecommandes[] = $lignecommandes;

			return $this;
		}

		/**
		 * Remove lignecommandes
		 *
		 * @param \s4smithe\VitrineBundle\Entity\LigneCommande $lignecommandes
		 */
		public function removeLignecommande( \s4smithe\VitrineBundle\Entity\LigneCommande $lignecommandes ) {
			$this->lignecommandes->removeElement( $lignecommandes );
		}

		/**
		 * Get lignecommandes
		 *
		 * @return \Doctrine\Common\Collections\Collection
		 */
		public function getLignecommandes() {
			return $this->lignecommandes;
		}


		/**
		 * @return int
		 */
		public function getPrixCommande() {
			$total = 0;

			foreach ( $this->getLignecommandes() as $ligne ) {
				$total += $ligne->getPrix() * $ligne->getQte();
			}

			return $total;
		}

		/**
		 * @return int
		 */
		public function getNbArticleCommande() {
			$nb = 0;

			foreach ( $this->getLignecommandes() as $ligne ) {
				$nb += $ligne->getQte();
			}

			return $nb;
		}

	}
