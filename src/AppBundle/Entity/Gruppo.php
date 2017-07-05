<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="gruppi")
 */
class Gruppo
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
     * @var Utente[]|ArrayCollection
     * @ORM\OneToMany(
     *      targetEntity="Utente",
     *      mappedBy="gruppo",
     *      orphanRemoval=true
     * )
     * @ORM\OrderBy({"id": "DESC"})
     */
    private $utenti;        

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->utenti = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Gruppo
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
     * Add utenti
     *
     * @param \AppBundle\Entity\Utente $utenti
     *
     * @return Gruppo
     */
    public function addUtenti(\AppBundle\Entity\Utente $utenti)
    {
        $this->utenti[] = $utenti;

        return $this;
    }

    /**
     * Remove utenti
     *
     * @param \AppBundle\Entity\Utente $utenti
     */
    public function removeUtenti(\AppBundle\Entity\Utente $utenti)
    {
        $this->utenti->removeElement($utenti);
    }

    /**
     * Get utenti
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUtenti()
    {
        return $this->utenti;
    }
}
