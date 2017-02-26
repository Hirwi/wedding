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
		->add('isattending', ChoiceType::class, array(
			'choices'  => array(
				$this->labels[$lang]['no'] => 2,
				$this->labels[$lang]['yes'] => 1,
			),
			'required' => false,
			'label' => $this->labels[$lang]['isattending']
		))
		->add('name', TextType::class, array(
			'label' => $this->labels[$lang]['name'],
		))
		->add('allergies', TextareaType::class, array(
			'label' => $this->labels[$lang]['allergies'],
		))
		->add('musicwishes', TextareaType::class, array(
			'label' => $this->labels[$lang]['musicwishes'],
		))
		->add('notices', TextareaType::class, array(
			'label' => $this->labels[$lang]['notices'],
		))
		->add('password', TextType::class, array(
			'label' => $this->labels[$lang]['password'],
		))
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
		->add('isattending', ChoiceType::class, array(
			'choices'  => array(
				$this->labels[$lang]['no'] => 2,
				$this->labels[$lang]['yes'] => 1,
			),
			'required' => false,
			'label' => $this->labels[$lang]['isattending']
		))
		->add('name', TextType::class, array(
			'label' => $this->labels[$lang]['name'],
		))
		->add('allergies', TextareaType::class, array(
			'label' => $this->labels[$lang]['allergies'],
		))
		->add('musicwishes', TextareaType::class, array(
			'label' => $this->labels[$lang]['musicwishes'],
		))
		->add('notices', TextareaType::class, array(
			'label' => $this->labels[$lang]['notices'],
		))
		->add('password', TextType::class, array(
			'label' => $this->labels[$lang]['password'],
		))
		->getForm();

		
		if ($request->isMethod('POST')) {
			$form->submit($request->request->get($form->getName()));

			if ($form->isSubmitted() && $form->isValid()) {
				$data = $form->getData();
				if($data['password'] === 'arisatu2017'){
					$this->sendRegistrationMail($data, $request);
					return $this->redirectToRoute('registrationcompleted');
				}else{
					echo "Password not correct!<br><br>";
					echo '<a href="/wedding/registration">Back</a>';
					exit;
					return $this->redirectToRoute('registration');
				}
			}
		}
		
		echo "error";
		exit;
    }
	
	
	/*
	* Send Registration-Form
	*
	*/
	private function sendRegistrationMail($data, $request)
	{
		$session = $request->getSession();
		$lang = $session->get('contentlanguage');
		$lang = !empty($lang) ? $lang : 'fi';
		$this->labels = include('labels/labels.php');
		
		
		$message = \Swift_Message::newInstance()
		->setSubject('Hääilmoittautuminen')
		->setFrom('info@derfinne.ch')
		->setTo(['satuylit@gmail.com', 'ari.ikalainen@hotmail.com'])
		->setBody(
				$this->renderView(
					// app/Resources/views/Emails/registration.html.twig
					'Emails/registration.html.twig',
					array(
						'data' => $data
					)
				),
				'text/html');

		$mailer = $this->get('mailer');
		$mailer->send($message);

		$spool = $mailer->getTransport()->getSpool();
		$transport = $this->get('swiftmailer.transport.real');
		$spool->flushQueue($transport);
	}
	
	
	
	/**
     * @Route("/wedding/registrationcompleted", name="registrationcompleted")
     */
    public function registrationcompletedAction(Request $request)
    {
		$session = $request->getSession();
		
		$lang = $session->get('contentlanguage');
		$lang = !empty($lang) ? $lang : 'fi';
		$this->labels = include('labels/labels.php');
	
		
        return $this->render('wedding/registrationcompleted.html.twig', array(
            'labels' => $this->labels[$lang],
        ));
    }
	
	
}
