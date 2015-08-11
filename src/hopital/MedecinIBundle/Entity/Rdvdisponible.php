<?php

namespace hopital\MedecinIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rdvdisponible
 *
 * @ORM\Table(name="rdvdisponible", indexes={@ORM\Index(name="cinM", columns={"cinM"})})
 * @ORM\Entity
 */
class Rdvdisponible
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateR", type="date", nullable=false)
     */
    private $dater;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureR", type="time", nullable=false)
     */
    private $heurer;

    /**
     * @var string
     *
     * @ORM\Column(name="dispo", type="string", length=20, nullable=false)
     */
    private $dispo = 'Disponible';

     /**
     * @var string
     *
     * @ORM\Column(name="cinM", type="string", length=20, nullable=false)
     */
    private $cinm;



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
     * Set dater
     *
     * @param \DateTime $dater
     * @return Rdvdisponible
     */
    public function setDater($dater)
    {
        $this->dater = $dater;

        return $this;
    }

    /**
     * Get dater
     *
     * @return \DateTime 
     */
    public function getDater()
    {
        return $this->dater;
    }

    /**
     * Set heurer
     *
     * @param \DateTime $heurer
     * @return Rdvdisponible
     */
    public function setHeurer($heurer)
    {
        $this->heurer = $heurer;

        return $this;
    }

    /**
     * Get heurer
     *
     * @return \DateTime 
     */
    public function getHeurer()
    {
        return $this->heurer;
    }

    /**
     * Set dispo
     *
     * @param string $dispo
     * @return Rdvdisponible
     */
    public function setDispo($dispo)
    {
        $this->dispo = $dispo;

        return $this;
    }

    /**
     * Get dispo
     *
     * @return string 
     */
    public function getDispo()
    {
        return $this->dispo;
    }

    /**
     * Get cinm
     *
     * @return string 
     */
    public function setCinm( $cinm )
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
