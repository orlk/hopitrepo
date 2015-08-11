<?php

namespace Users\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfacture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacture;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_consultation", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixConsultation;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_chambre", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixChambre;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_trait", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixTrait;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_exam_labo", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixExamLabo;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_total", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixTotal;


 /**
     * @var date
     *
     * @ORM\Column(name="datefacture", type="date", nullable=true)
     */
    private $datefacture;

   



    /**
     * Get idfacture
     *
     * @return integer 
     */
    public function getIdfacture()
    {
        return $this->idfacture;
    }

    /**
     * Set prixConsultation
     *
     * @param float $prixConsultation
     * @return Facture
     */
    public function setPrixConsultation($prixConsultation)
    {
        $this->prixConsultation = $prixConsultation;

        return $this;
    }

    /**
     * Get prixConsultation
     *
     * @return float 
     */
    public function getPrixConsultation()
    {
        return $this->prixConsultation;
    }

    /**
     * Set prixChambre
     *
     * @param float $prixChambre
     * @return Facture
     */
    public function setPrixChambre($prixChambre)
    {
        $this->prixChambre = $prixChambre;

        return $this;
    }

    /**
     * Get prixChambre
     *
     * @return float 
     */
    public function getPrixChambre()
    {
        return $this->prixChambre;
    }

    /**
     * Set prixTrait
     *
     * @param float $prixTrait
     * @return Facture
     */
    public function setPrixTrait($prixTrait)
    {
        $this->prixTrait = $prixTrait;

        return $this;
    }

    /**
     * Get prixTrait
     *
     * @return float 
     */
    public function getPrixTrait()
    {
        return $this->prixTrait;
    }

    /**
     * Set prixExamLabo
     *
     * @param float $prixExamLabo
     * @return Facture
     */
    public function setPrixExamLabo($prixExamLabo)
    {
        $this->prixExamLabo = $prixExamLabo;

        return $this;
    }

    /**
     * Get prixExamLabo
     *
     * @return float 
     */
    public function getPrixExamLabo()
    {
        return $this->prixExamLabo;
    }

    /**
     * Set prixTotal
     *
     * @param float $prixTotal
     * @return Facture
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return float 
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    
     /**
     * Set datefacture
     *
     * @param \date $datefacture
     * @return Facture
     */
    public function setDatefacture($datefacture){
        $this->datefacture = $datefacture;

        return $this;
    }

    /**
     * Get datefacture
     *
     * @return \date 
     */
    public function getDatefacture() {
        return $this->datefacture;
    }


public function __construct() {
        $this->created_at = $this->updated_at = new \DateTime("now");
    }

    public function updated() {
        $this->updated_at = new \DateTime("now");
    }

   
}
