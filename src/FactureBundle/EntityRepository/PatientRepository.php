<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FactureBundle\EntityRepository;
use Doctrine\ORM\EntityRepository;
/**
 * Description of PatientRepository
 *
 * @author abdou
 */
class PatientRepository extends EntityRepository{
    //put your code here
    public function  Login($login ,$password)
    {
      $query=$this->createQueryBuilder()->select('p')
                    ->from('FactureBundle:Patient', 'p')
                    ->where('p.login=:login')
                    ->setParameter('login', $login)
                    ->andWhere('p.password=:password')
                    ->setParameter('password', $password)
                    ->getQuery();
            return $query->getOneOrNullResult();
    }
}
