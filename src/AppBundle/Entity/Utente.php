<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UtenteRepository")
 * @ORM\Table(name="users")
 */

class Utente
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $nome;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $cognome;

    /**
     * @var string
     * @ORM\Column(type="string", length=200, unique=true)
     */
    private $email;
    
    
    /**
     * @var Gruppo
     * @ORM\ManyToOne(targetEntity="Gruppo", inversedBy="utenti")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gruppo;
    


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Utente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     *
     * @return Utente
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Utente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set gruppo
     *
     * @param \AppBundle\Entity\Gruppo $gruppo
     *
     * @return Utente
     */
    public function setGruppo(\AppBundle\Entity\Gruppo $gruppo)
    {
        $this->gruppo = $gruppo;

        return $this;
    }

    /**
     * Get gruppo
     *
     * @return \AppBundle\Entity\Gruppo
     */
    public function getGruppo()
    {
        return $this->gruppo;
    }
}
