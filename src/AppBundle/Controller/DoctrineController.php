<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Utente;
use AppBundle\Entity\Gruppo;

class DoctrineController extends Controller
{
	
	/**
     * @Route("/crea-utenti", name="insert")
     */
    public function createAction()
    {
        $gruppo = new Gruppo();
        $gruppo->setNome('Rubrica personale');

        $utente1 = new Utente();
        $utente1->setNome('Mario');
        $utente1->setCognome('Rossi');
        $utente1->setEmail('mariorossi@email.it');
        $utente1->setGruppo($gruppo);

        $utente2 = new Utente();
        $utente2->setNome('Franco');
        $utente2->setCognome('Bianchi');
        $utente2->setEmail('francobianchi@email.it');
        $utente2->setGruppo($gruppo);
        
        $utente3 = new Utente();
        $utente3->setNome('Pietro');
        $utente3->setCognome('Neri');
        $utente3->setEmail('pietroneri@email.it');
        $utente3->setGruppo($gruppo);
        
        try {
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($gruppo);
	        $em->persist($utente1);
	        $em->persist($utente2);
	        $em->persist($utente3);
	        $em->flush();
	        return new Response('OK!');
	    } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
	        return new Response('Già inseriti!');
	    }

    }
    
     /**
     * @Route("/prova-doctrine", name="reads")
     */
	public function showUtentiAction()
	{
        $em = $this->getDoctrine()->getManager();
        $utenti = $em->getRepository(Utente::class)->findAll();

        return $this->render('reads.html.twig', ['utenti' => $utenti]);
	
	}
}