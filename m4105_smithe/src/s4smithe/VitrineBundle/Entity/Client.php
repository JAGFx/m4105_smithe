<?php

	namespace s4smithe\VitrineBundle\Entity;

	/**
	 * Client
	 */
	class Client {

		/**
		 * @var int
		 */
		private $id;

		/**
		 * @var string
		 */
		private $name;

		/**
		 * @var string
		 */
		private $mail;

		/**
		 * @var string
		 */
		private $address;

		/**
		 * @var int
		 */
		private $tel;

		/**
		 * @var string
		 */
		private $dateBirthday;

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
		 * @return Client
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
		 * Set mail
		 *
		 * @param string $mail
		 * @return Client
		 */
		public function setMail($mail) {
			$this->mail = $mail;

			return $this;
		}

		/**
		 * Get mail
		 *
		 * @return string 
		 */
		public function getMail() {
			return $this->mail;
		}

		/**
		 * Set address
		 *
		 * @param string $address
		 * @return Client
		 */
		public function setAddress($address) {
			$this->address = $address;

			return $this;
		}

		/**
		 * Get address
		 *
		 * @return string 
		 */
		public function getAddress() {
			return $this->address;
		}

		/**
		 * Set tel
		 *
		 * @param integer $tel
		 * @return Client
		 */
		public function setTel($tel) {
			$this->tel = $tel;

			return $this;
		}

		/**
		 * Get tel
		 *
		 * @return integer 
		 */
		public function getTel() {
			return $this->tel;
		}

		/**
		 * Set dateBirthday
		 *
		 * @param string $dateBirthday
		 * @return Client
		 */
		public function setDateBirthday($dateBirthday) {
			$this->dateBirthday = $dateBirthday;

			return $this;
		}

		/**
		 * Get dateBirthday
		 *
		 * @return string 
		 */
		public function getDateBirthday() {
			return $this->dateBirthday;
		}

		/**
		 * @var \Doctrine\Common\Collections\Collection
		 */
		private $commande;

		/**
		 * Constructor
		 */
		public function __construct() {
			$this->commande = new \Doctrine\Common\Collections\ArrayCollection();
		}

		/**
		 * Add commande
		 *
		 * @param \s4smithe\VitrineBundle\Entity\Commande $commande
		 * @return Client
		 */
		public function addCommande(\s4smithe\VitrineBundle\Entity\Commande $commande) {
			$this->commande[] = $commande;

			return $this;
		}

		/**
		 * Remove commande
		 *
		 * @param \s4smithe\VitrineBundle\Entity\Commande $commande
		 */
		public function removeCommande(\s4smithe\VitrineBundle\Entity\Commande $commande) {
			$this->commande->removeElement($commande);
		}

		/**
		 * Get commande
		 *
		 * @return \Doctrine\Common\Collections\Collection 
		 */
		public function getCommande() {
			return $this->commande;
		}

	}
	