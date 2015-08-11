<?php

namespace Users\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre", uniqueConstraints={@ORM\UniqueConstraint(name="nbrchambre", columns={"numchambre"})}, indexes={@ORM\Index(name="idPatient", columns={"idPatient"})})
 * @ORM\Entity
 */
class Chambre {

    /**
     * @var integer
     *
     * @ORM\Column(name="idchambre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idchambre;

    /**
     * @var integer
     *
     * @ORM\Column(name="numchambre", type="integer", nullable=true)
     */
    private $numchambre;

    /**
     * @var string
     *
     * @ORM\Column(name="typechambre", type="string", length=255, nullable=true)
     */
    private $typechambre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arriv", type="date", nullable=true)
     */
    private $dateArriv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sort", type="date", nullable=true)
     */
    private $dateSort;

    /**
     * @var integer
     *
     * @ORM\Column(name="disponibiliter", type="integer", nullable=false)
     */
    private $disponibiliter = '1';

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatient", referencedColumnName="idPatient")
     * })
     */
    private $idpatient;

    /**
     * Get idchambre
     *
     * @return integer 
     */
    public function getIdchambre() {
        return $this->idchambre;
    }

    /**
     * Set numchambre
     *
     * @param integer $numchambre
     * @return Chambre
     */
    public function setNumchambre($numchambre) {
        $this->numchambre = $numchambre;

        return $this;
    }

    /**
     * Get numchambre
     *
     * @return integer 
     */
    public function getNumchambre() {
        return $this->numchambre;
    }

    /**
     * Set typechambre
     *
     * @param string $typechambre
     * @return Chambre
     */
    public function setTypechambre($typechambre) {
        $this->typechambre = $typechambre;

        return $this;
    }

    /**
     * Get typechambre
     *
     * @return string 
     */
    public function getTypechambre() {
        return $this->typechambre;
    }

    /**
     * Set dateArriv
     *
     * @param \DateTime $dateArriv
     * @return Chambre
     */
    public function setDateArriv($dateArriv) {
        $this->dateArriv = $dateArriv;

        return $this;
    }

    /**
     * Get dateArriv
     *
     * @return \DateTime 
     */
    public function getDateArriv() {
        return $this->dateArriv;
    }

    /**
     * Set dateSort
     *
     * @param \DateTime $dateSort
     * @return Chambre
     */
    public function setDateSort($dateSort) {
        $this->dateSort = $dateSort;

        return $this;
    }

    /**
     * Get dateSort
     *
     * @return \DateTime 
     */
    public function getDateSort() {
        return $this->dateSort;
    }

    /**
     * Set disponibiliter
     *
     * @param integer $disponibiliter
     * @return Chambre
     */
    public function setDisponibiliter($disponibiliter) {
        $this->disponibiliter = $disponibiliter;

        return $this;
    }

    /**
     * Get disponibiliter
     *
     * @return integer 
     */
    public function getDisponibiliter() {
        return $this->disponibiliter;
    }

    /**
     * Set idpatient
     *
     * @param \Users\UsersBundle\Entity\Patient $idpatient
     * @return Chambre
     */
    public function setIdpatient(\Users\UsersBundle\Entity\Patient $idpatient = null) {
        $this->idpatient = $idpatient;

        return $this;
    }

    /**
     * Get idpatient
     *
     * @return \Users\UsersBundle\Entity\Patient 
     */
    public function getIdpatient() {
        return $this->idpatient;
    }

    public function __construct() {
        $this->created_at = $this->updated_at = new \DateTime("now");
         $this->idpatient = new ArrayCollection();
    }

    public function updated() {
        $this->updated_at = new \DateTime("now");
    }

}
