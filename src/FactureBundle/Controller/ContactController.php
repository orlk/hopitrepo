<?php

namespace FactureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FactureBundle\Entity\Patient;

class ContactController extends Controller {

    public function contactAction() {
        $request = $this->getRequest();
        $session = $request->getSession()->get('patient');
        $em=  $this->getDoctrine()->getManager();
        $medecins=$em->getRepository('FactureBundle:Medecin')->findAll();
        $m=NULL;
        if ($request->getMethod() == "POST") {
            $m=NULL;
            $to = $request->get('emailto');
            $subject = $request->get('subject');
            $message = $request->get('message');

            if ($session == NULL) {
                $from = $request->get('email');
            } else {
                $patient = new Patient();
                $patient = $session;
                $from = $patient->getEmail();
            }
            $mailer = $this->get('mailer');
            $message1 = $mailer->createMessage()
                    ->setSubject($subject)
                    ->setFrom($from)
                    ->setTo($to)
                    ->setBody($message);
           
                if($mailer->send($message1))
                {
                $m="true";
                }

           
            
        }
        
        return $this->render('FactureBundle:Contact:contact.html.twig', array('s' => $session,'m'=>$m,'medecins'=>$medecins));
    }

}
