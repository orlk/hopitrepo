<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace hopital\MedecinIBundle\Entity;
use Doctrine\ORM\EntityRepository;

class RendezvousRepository extends EntityRepository{
   

public function findRdParametre($codem,$dateR)
    {
        $query=$this->getEntityManager()
            ->createQuery("SELECT f FROM MedecinIBundle:Rendezvous f where f.cinm=:codem AND f.date=:dateR")
            ->setParameter('codem',$codem)
                ->setParameter('dateR',$dateR);
        return $query->getResult();        
    }
public function updateAccept($code)
    {
        $query=$this->getEntityManager()
            ->createQuery("UPDATE MedecinIBundle:Rendezvous c SET c.validation ='Accepté' WHERE c.code =:ccode")
            ->setParameter('ccode',$code)
            
            ->execute();
    }
    public function updateRefus($code)
    {
        $query=$this->getEntityManager()
            ->createQuery("UPDATE MedecinIBundle:Rendezvous c SET c.validation ='Refusé' WHERE c.code =:ccode")
            ->setParameter('ccode',$code)
            
            ->execute();
    }
}