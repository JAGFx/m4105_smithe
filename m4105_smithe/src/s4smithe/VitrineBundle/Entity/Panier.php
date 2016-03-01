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
		private $articles;


		
		/**
		 * Add article
		 *
		 * @param string $articleID
		 * @param int $qte
		 */
		public function addArticle( $articleID, $qte = 1 ) {
			$this->articles[] = array(
				'id' => $articleID,
				/*'name' => $article->getName(),
				'prixU' => $article->getPrice(),*/
				'qte' => $qte
			);
		}
		
		/**
		 * remove article
		 *
		 * @param string $articleID
		 */
		public function removeArticle( $articleID ) {
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
			return count($this->articles);
		}

	}
	