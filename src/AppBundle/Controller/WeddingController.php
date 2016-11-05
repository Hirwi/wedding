<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class WeddingController extends Controller
{
	
	private $labels = [];
	
	private $lang = 'fi';
	
	function __construct()
	{
			//$this->labels = include('labels/labels.php');
			//$this->labels = $this->labels[$this->lang];
	}
	
	
    /**
     * @Route("/wedding/start", name="start")
     */
    public function startAction(Request $request)
    {
		$session = $request->getSession();
		$this->labels = include('labels/labels.php');
		$this->labels = $this->labels[$session->get('contentlanguage')];
			
        return $this->render('wedding/start.html.twig', array(
            'labels' => $this->labels,
        ));
    }
	
	
	/**
     * @Route("/wedding/links", name="links")
     */
    public function linksAction(Request $request)
    {
		$session = $request->getSession();
		$this->labels = include('labels/labels.php');
		$this->labels = $this->labels[$session->get('contentlanguage')];
		
        return $this->render('wedding/links.html.twig', array(
            'labels' => $this->labels,
        ));
    }
	
	
	/**
     * @Route("/wedding/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
		$session = $request->getSession();
		$this->labels = include('labels/labels.php');
		$this->labels = $this->labels[$session->get('contentlanguage')];
		
        return $this->render('wedding/contact.html.twig', array(
            'labels' => $this->labels,
        ));
    }
}
