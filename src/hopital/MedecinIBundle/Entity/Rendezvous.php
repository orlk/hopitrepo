<?php

namespace hopital\MedecinIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rendezvous
 *
 * @ORM\Table(name="rendezvous", indexes={@ORM\Index(name="cinM", columns={"cinM"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="hopital\MedecinIBundle\Entity\RendezvousRepository")
 */
class Rendezvous
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="cin_p", type="string", length=20, nullable=false)
     */
    private $cinP;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time", nullable=false)
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=100, nullable=false)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="validation", type="string", length=20, nullable=false)
     */
    private $validation = 'En attente';

    /**
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cinM", referencedColumnName="id")
     * })
     */
    private $cinm;



    /**
     * Get code
     *
     * @return integer 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set cinP
     *
     * @param string $cinP
     * @return Rendezvous
     */
    public function setCinP($cinP)
    {
        $this->cinP = $cinP;

        return $this;
    }

    /**
     * Get cinP
     *
     * @return string 
     */
    public function getCinP()
    {
        return $this->cinP;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Rendezvous
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     * @return Rendezvous
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime 
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Rendezvous
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set validation
     *
     * @param string $validation
     * @return Rendezvous
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return string 
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Set cinm
     *
     * @param \hopital\MedecinIBundle\Entity\Medecin $cinm
     * @return Rendezvous
     */
    public function setCinm(\hopital\MedecinIBundle\Entity\Medecin $cinm = null)
    {
        $this->cinm = $cinm;

        return $this;
    }

    /**
     * Get cinm
     *
     * @return \hopital\MedecinIBundle\Entity\Medecin 
     */
    public function getCinm()
    {
        return $this->cinm;
    }
}
