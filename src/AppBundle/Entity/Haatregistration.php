<?php
// src/AppBundle/Entity/Haatregistration.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="haat_registration")
 */
class Haatregistration
{
	
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $nregistrationid;
	
	/**
     * @ORM\Column(type="integer")
     */
    private $nisattending;
	
	/**
     * @ORM\Column(type="text")
     */
    private $cname;
	
	/**
     * @ORM\Column(type="textarea")
     */
    private $mallergies;
	
	/**
     * @ORM\Column(type="textarea")
     */
    private $mmusicwishes;

	/**
     * @ORM\Column(type="textarea")
     */
    private $mnotices;
	
	/**
     * @ORM\Column(type="text")
     */
    private $cpassword;
	
	/**
     * @ORM\Column(type="datetime")
     */
    private $dregistrationdatetime;
	


    /**
     * Get nregistrationid
     *
     * @return integer
     */
    public function getNregistrationid()
    {
        return $this->nregistrationid;
    }

    /**
     * Set nisattending
     *
     * @param integer $nisattending
     *
     * @return Haatregistration
     */
    public function setNisattending($nisattending)
    {
        $this->nisattending = $nisattending;

        return $this;
    }

    /**
     * Get nisattending
     *
     * @return integer
     */
    public function getNisattending()
    {
        return $this->nisattending;
    }

    /**
     * Set cname
     *
     * @param string $cname
     *
     * @return Haatregistration
     */
    public function setCname($cname)
    {
        $this->cname = $cname;

        return $this;
    }

    /**
     * Get cname
     *
     * @return string
     */
    public function getCname()
    {
        return $this->cname;
    }

    /**
     * Set mallergies
     *
     * @param \textarea $mallergies
     *
     * @return Haatregistration
     */
    public function setMallergies(\textarea $mallergies)
    {
        $this->mallergies = $mallergies;

        return $this;
    }

    /**
     * Get mallergies
     *
     * @return \textarea
     */
    public function getMallergies()
    {
        return $this->mallergies;
    }

    /**
     * Set mmusicwishes
     *
     * @param \textarea $mmusicwishes
     *
     * @return Haatregistration
     */
    public function setMmusicwishes(\textarea $mmusicwishes)
    {
        $this->mmusicwishes = $mmusicwishes;

        return $this;
    }

    /**
     * Get mmusicwishes
     *
     * @return \textarea
     */
    public function getMmusicwishes()
    {
        return $this->mmusicwishes;
    }

    /**
     * Set mnotices
     *
     * @param \textarea $mnotices
     *
     * @return Haatregistration
     */
    public function setMnotices(\textarea $mnotices)
    {
        $this->mnotices = $mnotices;

        return $this;
    }

    /**
     * Get mnotices
     *
     * @return \textarea
     */
    public function getMnotices()
    {
        return $this->mnotices;
    }

    /**
     * Set cpassword
     *
     * @param string $cpassword
     *
     * @return Haatregistration
     */
    public function setCpassword($cpassword)
    {
        $this->cpassword = $cpassword;

        return $this;
    }

    /**
     * Get cpassword
     *
     * @return string
     */
    public function getCpassword()
    {
        return $this->cpassword;
    }

    /**
     * Set dregistrationdatetime
     *
     * @param \DateTime $dregistrationdatetime
     *
     * @return Haatregistration
     */
    public function setDregistrationdatetime($dregistrationdatetime)
    {
        $this->dregistrationdatetime = $dregistrationdatetime;

        return $this;
    }

    /**
     * Get dregistrationdatetime
     *
     * @return \DateTime
     */
    public function getDregistrationdatetime()
    {
        return $this->dregistrationdatetime;
    }
}
