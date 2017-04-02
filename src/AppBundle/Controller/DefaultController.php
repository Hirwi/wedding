<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Haatmaksut;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
		$session = $request->getSession();
		$lang = $session->get('contentlanguage');
		$lang = !empty($lang) ? $lang : 'fi';
		$this->labels = include('labels/labels.php');
		
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
			'labels' => $this->labels[$lang]
        ]);
    }
	
	
	// malli tietokantaan laitto entityn avulla
	public function createAction()
	{
		$haatmaksut = new Haatmaksut();
		$haatmaksut->setCkuvaus('Kuvaustesti1');
		$haatmaksut->setNarvio(12345);

		$em = $this->getDoctrine()->getManager();
		
		// tells Doctrine you want to (eventually) save the Product (no queries yet)
		$em->persist($haatmaksut);

		// actually executes the queries (i.e. the INSERT query)
		$em->flush();

		return new Response('Saved new product with id '.$haatmaksut->getNmaksutid());
		exit;
	}
	
	
	
	public function showAction($productId)
	{
		
		$haatid = 4;
		$repository = $this->getDoctrine()
			->getRepository('AppBundle:Haatmaksut');
			
			
		$haatmaksut = $repository->find($haatid);
		
		$haatmaksut = $repository->findAll();

		if (!$haatmaksut) {
			throw $this->createNotFoundException(
				'No product found for id '.$haatid
			);
		}
		exit;
		
		$repository = $this->getDoctrine()->getRepository('AppBundle:Product');

		// query for a single product by its primary key (usually "id")
		$product = $repository->find($productId);

		// dynamic method names to find a single product based on a column value
		$product = $repository->findOneById($productId);
		$product = $repository->findOneByName('Keyboard');

		// dynamic method names to find a group of products based on a column value
		$products = $repository->findByPrice(19.99);

		// find *all* products
		$products = $repository->findAll();
		
		
		//echo $haatmaksut->nmaksutid;
		echo "<pre>";
		print_r($haatmaksut);
		exit;
		
		
		
		
	}	

	
	
}
