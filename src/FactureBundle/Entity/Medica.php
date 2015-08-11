<?php

namespace FactureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medica
 *
 * @ORM\Table(name="medica")
 * @ORM\Entity
 */
class Medica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Idmedica", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmedica;

    /**
     * @var string
     *
     * @ORM\Column(name="Nommedica", type="string", length=255, nullable=true)
     */
    private $nommedica;

    /**
     * @var string
     *
     * @ORM\Column(name="Typemedica", type="string", length=255, nullable=true)
     */
    private $typemedica;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantitemedica", type="integer", nullable=true)
     */
    private $quantitemedica;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=225, nullable=false)
     */
    private $libelle;



    /**
     * Set nommedica
     *
     * @param string $nommedica
     * @return Medica
     */
    public function setNommedica($nommedica)
    {
        $this->nommedica = $nommedica;

        return $this;
    }

    /**
     * Get nommedica
     *
     * @return string 
     */
    public function getNommedica()
    {
        return $this->nommedica;
    }

    /**
     * Set typemedica
     *
     * @param string $typemedica
     * @return Medica
     */
    public function setTypemedica($typemedica)
    {
        $this->typemedica = $typemedica;

        return $this;
    }

    /**
     * Get typemedica
     *
     * @return string 
     */
    public function getTypemedica()
    {
        return $this->typemedica;
    }

    /**
     * Set quantitemedica
     *
     * @param integer $quantitemedica
     * @return Medica
     */
    public function setQuantitemedica($quantitemedica)
    {
        $this->quantitemedica = $quantitemedica;

        return $this;
    }

    /**
     * Get quantitemedica
     *
     * @return integer 
     */
    public function getQuantitemedica()
    {
        return $this->quantitemedica;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Medica
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Medica
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Get idmedica
     *
     * @return integer 
     */
    public function getIdmedica()
    {
        return $this->idmedica;
    }
    function setIdmedica($idmedica) {
        $this->idmedica = $idmedica;
    }


}
