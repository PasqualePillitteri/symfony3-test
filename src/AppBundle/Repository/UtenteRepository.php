<?php

namespace AppBundle\Repository;

/**
 * UtenteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UtenteRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAll()
    {        
        $query = $this->getEntityManager()
        ->createQuery(
            'SELECT u, RAND() as HIDDEN r
            FROM AppBundle:Utente u 
            ORDER BY r'
        );
        
        try {
	        return $query->getResult();
	    } catch (\Doctrine\ORM\NoResultException $e) {
	        return null;
	    }
    }
}