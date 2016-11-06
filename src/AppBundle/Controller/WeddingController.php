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
		$lang = $session->get('contentlanguage');
		$lang = !empty($lang) ? $lang : 'fi';
		$this->labels = include('labels/labels.php');
			
        return $this->render('wedding/start.html.twig', array(
            'labels' => $this->labels[$lang],
        ));
    }
	
	
	/**
     * @Route("/wedding/links", name="links")
     */
    public function linksAction(Request $request)
    {
		$session = $request->getSession();
		$lang = $session->get('contentlanguage');
		$lang = !empty($lang) ? $lang : 'fi';
		$this->labels = include('labels/labels.php');
		
        return $this->render('wedding/links.html.twig', array(
            'labels' => $this->labels[$lang],
        ));
    }
	
	
	/**
     * @Route("/wedding/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
		$session = $request->getSession();
		$lang = $session->get('contentlanguage');
		$lang = !empty($lang) ? $lang : 'fi';
		$this->labels = include('labels/labels.php');
		
        return $this->render('wedding/contact.html.twig', array(
            'labels' => $this->labels[$lang],
        ));
    }
	
	
	/**
     * @Route("/wedding/arriving", name="arriving")
     */
    public function arrivingAction(Request $request)
    {
		$session = $request->getSession();
		$lang = $session->get('contentlanguage');
		$lang = !empty($lang) ? $lang : 'fi';
		$this->labels = include('labels/labels.php');
		
        return $this->render('wedding/arriving.html.twig', array(
            'labels' => $this->labels[$lang],
        ));
    }
	
	
	/**
     * @Route("/wedding/accommodation", name="accommodation")
     */
    public function accommodationAction(Request $request)
    {
		$session = $request->getSession();
		$lang = $session->get('contentlanguage');
		$lang = !empty($lang) ? $lang : 'fi';
		$this->labels = include('labels/labels.php');
		
        return $this->render('wedding/accommodation.html.twig', array(
            'labels' => $this->labels[$lang],
        ));
    }
	
	
	/**
     * @Route("/wedding/locations", name="locations")
     */
    public function locationsAction(Request $request)
    {
		$session = $request->getSession();
		$lang = $session->get('contentlanguage');
		$lang = !empty($lang) ? $lang : 'fi';
		$this->labels = include('labels/labels.php');
		
        return $this->render('wedding/locations.html.twig', array(
            'labels' => $this->labels[$lang],
        ));
    }
}
