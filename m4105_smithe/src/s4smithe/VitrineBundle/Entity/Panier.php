<?php

	namespace s4smithe\VitrineBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;

	/**
	 * Panier
	 */
	class Panier {

		/**
		 * @var array
		 */
		private $articles = array();


		
		/**
		 * Add article
		 *
		 * @param string $articleID
		 * @param int $qte
		 */
		public function addArticle( $articleID, $qte ) {
			if(key_exists($articleID, $this->articles) ){
				$this->articles[ $articleID ]['qte'] += $qte;
				
			} else {
				$this->articles[ $articleID ] = array(
					'id' => (int) $articleID,
					'qte' => (int) $qte
				);
			}
		}
		
		/**
		 * remove article
		 *
		 * @param string $articleID
		 */
		public function removeOneArticle( $articleID, $qte ) {
			if( key_exists($articleID, $this->articles) && $this->articles[ $articleID ]['qte'] > 1 ){
				$this->articles[ $articleID ]['qte'] -= $qte;
				
			} else {
				unset( $this->articles[ $articleID ] );
			}
		}
		
		/**
		 * remove article
		 *
		 * @param string $articleID
		 */
		public function removeArticles( $articleID ) {
			if( key_exists($articleID, $this->articles) )
				unset( $this->articles[ $articleID ] );
		}
		
		public function clearPanier(){
			unset( $this->articles );
		}

		/**
		 * Get articles
		 *
		 * @return array 
		 */
		public function getArticles() {
			return $this->articles;
		}
		
		public function getNbArticle(){
			$nb = 0;
			
			foreach ($this->articles as $artice)
				$nb += $artice['qte'];
			
			return $nb;
		}

	}
	