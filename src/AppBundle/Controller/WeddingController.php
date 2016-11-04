<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class WeddingController extends Controller
{
    /**
     * @Route("/wedding/start", name="start")
     */
    public function startAction()
    {
		
        $number = mt_rand(0, 100);
		
        return $this->render('wedding/start.html.twig', array(
            'number' => $number,
        ));
    }
	
	
	/**
     * @Route("/wedding/links", name="links")
     */
    public function linksAction()
    {
		
        return $this->render('wedding/links.html.twig', array(
            'number' => '223',
        ));
    }
	
	
	/**
     * @Route("/wedding/contact", name="contact")
     */
    public function contactAction()
    {
		
        return $this->render('wedding/contact.html.twig', array(
            'number' => '223',
        ));
    }
}
