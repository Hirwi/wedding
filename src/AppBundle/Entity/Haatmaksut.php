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
     * @ORM\Column(type="decimal", scale=2)
     */
    private $ntoteutunut;

	/**
     * @ORM\Column(type="text")
     */
    private $ckategoria;
	
	/**
     * @ORM\Column(type="integer")
     */
    private $nhuomioilaskennassa;
	
	
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

    /**
     * Set ntoteutunut
     *
     * @param string $ntoteutunut
     *
     * @return Haatmaksut
     */
    public function setNtoteutunut($ntoteutunut)
    {
        $this->ntoteutunut = $ntoteutunut;

        return $this;
    }

    /**
     * Get ntoteutunut
     *
     * @return string
     */
    public function getNtoteutunut()
    {
        return $this->ntoteutunut;
    }

    /**
     * Set ckategoria
     *
     * @param string $ckategoria
     *
     * @return Haatmaksut
     */
    public function setCkategoria($ckategoria)
    {
        $this->ckategoria = $ckategoria;

        return $this;
    }

    /**
     * Get ckategoria
     *
     * @return string
     */
    public function getCkategoria()
    {
        return $this->ckategoria;
    }

    /**
     * Set nhuomioilaskennassa
     *
     * @param integer $nhuomioilaskennassa
     *
     * @return Haatmaksut
     */
    public function setNhuomioilaskennassa($nhuomioilaskennassa)
    {
        $this->nhuomioilaskennassa = $nhuomioilaskennassa;

        return $this;
    }

    /**
     * Get nhuomioilaskennassa
     *
     * @return integer
     */
    public function getNhuomioilaskennassa()
    {
        return $this->nhuomioilaskennassa;
    }
}
