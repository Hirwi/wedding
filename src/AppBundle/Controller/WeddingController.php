<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


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
	
	
	/**
     * @Route("/wedding/gifts", name="gifts")
     */
    public function giftsAction(Request $request)
    {
		$session = $request->getSession();
		$lang = $session->get('contentlanguage');
		$lang = !empty($lang) ? $lang : 'fi';
		$this->labels = include('labels/labels.php');
		
        return $this->render('wedding/gifts.html.twig', array(
            'labels' => $this->labels[$lang],
        ));
	}
	
	
	/**
     * @Route("/wedding/registration", name="registration")
     */
    public function registrationAction(Request $request)
    {
		$formFactory = Forms::createFormFactory();
		$session = $request->getSession();
		
		$lang = $session->get('contentlanguage');
		$lang = !empty($lang) ? $lang : 'fi';
		$this->labels = include('labels/labels.php');
	
		$form = $formFactory->createBuilder(FormType::class, null, array(
			'action' => '/wedding/registrate',
			'method' => 'POST',
		))
		->add($this->labels[$lang]['name'], TextType::class)
		->add($this->labels[$lang]['isattending'], ChoiceType::class, array(
			'choices'  => array(
				$this->labels[$lang]['yes'] => true,
				$this->labels[$lang]['no'] => false,
			),
		))
		->add($this->labels[$lang]['allergies'], TextareaType::class)
		->add($this->labels[$lang]['notices'], TextareaType::class)
		->getForm();

		
		
        return $this->render('wedding/registration.html.twig', array(
            'labels' => $this->labels[$lang],
			'form' => $form->createView(),
        ));
    }
	
	
	
	/**
     * @Route("/wedding/registrate", name="registrate")
     */
    public function registrateAction(Request $request)
    {
		$formFactory = Forms::createFormFactory();
		$session = $request->getSession();
		$lang = $session->get('contentlanguage');
		$lang = !empty($lang) ? $lang : 'fi';
		$this->labels = include('labels/labels.php');
		
		$form = $formFactory->createBuilder(FormType::class, null, array(
			'action' => '/wedding/registrate',
			'method' => 'POST',
		))
		->add($this->labels[$lang]['name'], TextType::class)
		->add($this->labels[$lang]['isattending'], ChoiceType::class, array(
			'choices'  => array(
				$this->labels[$lang]['yes'] => true,
				$this->labels[$lang]['no'] => false,
			),
		))
		->add($this->labels[$lang]['allergies'], TextareaType::class)
		->add($this->labels[$lang]['notices'], TextareaType::class)
		->getForm();

		
		$form->handleRequest($request);
		
		echo "t33";
		$data = $form->getData();
		echo "<pre>";
		print_r($data);
		exit;
		
		
		
    }
	
	
	
}
