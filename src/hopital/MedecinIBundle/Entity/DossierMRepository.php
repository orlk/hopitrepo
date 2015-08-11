<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace hopital\MedecinIBundle\Entity;
use Doctrine\ORM\EntityRepository;

class DossierMRepository extends EntityRepository{
   

public function findDmParametre($codep,$codem)
    {
        $query=$this->getEntityManager()
            ->createQuery("SELECT f FROM MedecinIBundle:Dossiermedical f where f.codepatient=:codep AND f.codemedecin=:codem")
            ->setParameter('codep',$codep)
                ->setParameter('codem',$codem);
        return $query->getResult();        
    }

}
