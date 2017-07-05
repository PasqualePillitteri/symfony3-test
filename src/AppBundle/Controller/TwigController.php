<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Service\RandomNumber;


class TwigController extends Controller
{

    
    /**
     * @Route("/prova-twig/{name}", name="twig")
     */
    public function indexAction($name)
    {
		return $this->render('prova.html.twig', array(
			'name' => $name,
		));
    }

    /**
     * @Route("/prova-symfony", name="random")
     */
    public function randomAction(RandomNumber $randomnumber)
    {
	    $rand = $randomnumber->genera();
		return $this->render('service.html.twig', array(
			'number' => $rand,
		));
    }
        


}
