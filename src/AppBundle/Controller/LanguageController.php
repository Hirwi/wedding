<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class LanguageController extends Controller
{
	
	private $labels = [];
	
	function __construct()
	{
			
	}
	
	
    /**
     * @Route("/language/changelanguage/{lang}", name="changelanguage")
     */
    public function changelanguageAction($lang, Request $request)
    {	
		$session = $request->getSession();
		$session->set('contentlanguage', $lang);
		
		if(!empty($_SERVER['HTTP_REFERER'])){
			header('Location: '.$_SERVER['HTTP_REFERER']);
		}else{
			header('Location: /');
		}
		exit;
		
		//return $this->redirectToRoute('wedding/start/');
    }
	
}
