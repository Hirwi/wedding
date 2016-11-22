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
     * @ORM\Nmaksutid
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
}