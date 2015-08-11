<?php

namespace FactureBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FactureController extends Controller
{
    
   public function ListAction()
   {   $request=  $this->getRequest();
       $session=new \FactureBundle\Entity\Patient();
       $session=$request->getSession()->get('patient');
       $em=  $this->getDoctrine()->getManager();
       $factures=$em->getRepository('FactureBundle:Facture')->findBy(array('idpatient'=>$session->getIdpatient()));
       return $this->render('FactureBundle:Facture:Facture.html.twig', array('s'=>$session,'factures'=>$factures));
   }
    
   
}
