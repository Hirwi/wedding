<?php
// src/AppBundle/Entity/Haatmaksut.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="haat_maksut")
 */
class Haatmaksut
{
	
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $nmaksutid;
	
	/**
     * @ORM\Column(type="text")
     */
    private $ckuvaus;
	
	/**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $narvio;

    /**
     * Get nmaksutid
     *
     * @return integer
     */
    public function getNmaksutid()
    {
        return $this->nmaksutid;
    }

    /**
     * Set ckuvaus
     *
     * @param string $ckuvaus
     *
     * @return Haatmaksut
     */
    public function setCkuvaus($ckuvaus)
    {
        $this->ckuvaus = $ckuvaus;

        return $this;
    }

    /**
     * Get ckuvaus
     *
     * @return string
     */
    public function getCkuvaus()
    {
        return $this->ckuvaus;
    }

    /**
     * Set narvio
     *
     * @param string $narvio
     *
     * @return Haatmaksut
     */
    public function setNarvio($narvio)
    {
        $this->narvio = $narvio;

        return $this;
    }

    /**
     * Get narvio
     *
     * @return string
     */
    public function getNarvio()
    {
        return $this->narvio;
    }
}
