<?php

namespace FactureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FactureBundle\Entity\Dossiermedical;

class DossierMedController extends Controller {

    public function DossierAction() {
        $request = $this->getRequest();
        $session = new \FactureBundle\Entity\Patient();
        $session = $request->getSession()->get('patient');
        $dm = new Dossiermedical();
        $em = $this->getDoctrine()->getManager();
        $dm = $em->getRepository('FactureBundle:Dossiermedical')->findOneBy(array('codepatient' => $session->getIdpatient()));
        $medecin = $em->getRepository('FactureBundle:Medecin')->findOneBy(array('id' => $dm->getCodemedecin()));
        $fiches = $em->getRepository('FactureBundle:Fichepatient')->findBy(array('codedm' => $dm->getCodedm()));
        return $this->render('FactureBundle:DossierMed:DossMed.html.twig', array('s' => $session, 'fiches' => $fiches,'dos'=>$dm,'medecin'=>$medecin));
    }

}