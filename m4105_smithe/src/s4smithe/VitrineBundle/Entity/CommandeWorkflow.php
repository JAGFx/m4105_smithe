<?php

namespace s4smithe\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeWorkflow
 */
class CommandeWorkflow
{
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
     * Set qte
     *
     * @param integer $qte
     * @return CommandeWorkflow
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
    
        return $this;
    }

    /**
     * Get qte
     *
     * @return integer 
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return CommandeWorkflow
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set product
     *
     * @param \s4smithe\VitrineBundle\Entity\Product $product
     * @return CommandeWorkflow
     */
    public function setProduct(\s4smithe\VitrineBundle\Entity\Product $product = null)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \s4smithe\VitrineBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set commande
     *
     * @param \s4smithe\VitrineBundle\Entity\Commande $commande
     * @return CommandeWorkflow
     */
    public function setCommande(\s4smithe\VitrineBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;
    
        return $this;
    }

    /**
     * Get commande
     *
     * @return \s4smithe\VitrineBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }
}
