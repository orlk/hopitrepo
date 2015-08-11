<?php

namespace hopital\MailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use hopital\MailBundle\Entity\Mail;
use hopital\MailBundle\Form\MailType;
class mailController extends Controller
{
    public function indexAction() {
return $this->render('mailBundle:mail:mail.html.twig', array());
}

public function sendMailAction(Request $request) {
$to = "mouna.nouira92@gmail.com";
$mail = new Mail();
     $form=$this->createForm(new MailType(),$mail);
     $request2=$this->getRequest();
if($form->handleRequest($request2)->isValid()){

$message = \Swift_Message::newInstance()
->setSubject($mail->getNom())
->setFrom($to)
->setTo($mail-> getFrom())
->setBody($mail->getText());
$this->get('mailer')->send($message);


}
return $this->redirect($this->generateUrl('patient'));
}

public function newAction() {
$mail = new Mail();
$form= $this->container->get('form.factory')->create(new MailType(), $mail);
$request = $this->getRequest();
if ($request->getMethod() == 'POST') {
$form->bind($request);
if ($form->isValid()) {
$this->sendMailAction('mouna.nouira92@gmail.com', $mail-> getFrom(), $mail->getNom(), $mail->getText());
}
}
return $this->render('mailBundle:mail:new.html.twig', array('form' => $form->createView()));
                }
}
