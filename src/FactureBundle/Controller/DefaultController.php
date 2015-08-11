<?php

namespace FactureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FactureBundle\Entity\Patient;
use FactureBundle\form\LoginForm;

class DefaultController extends Controller {

    public function indexAction() {
        $patient = new Patient();
        $form = $this->createForm(new LoginForm(), $patient);
        $request = $this->getRequest();
        $form->handleRequest($request);
        $session = $request->getSession()->get('patient');
        if($request->getMethod()=='POST')
        {
        $login = $form['login']->getData();
        $password = $form['password']->getData();
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQueryBuilder()->select('p')
                ->from('FactureBundle:Patient', 'p')
                ->where('p.login=:login')
                ->setParameter('login', $login)
                ->andWhere('p.password=:password')
                ->setParameter('password', $password)
                ->getQuery();
        $patient = $query->getOneOrNullResult();
        if ($patient != NULL) {
            $request->getSession()->set('patient', $patient);
            $session = $request->getSession()->get('patient');
        }
        }
return $this->render('FactureBundle:Default:index.html.twig', array('form' => $form->createView(), 's' => $session,'factures'=>null));
    }
public function  logoutAction()
{
  $request = $this->getRequest();
  $request->getSession()->remove('patient');
  return $this->redirectToRoute('facture_homepage');
}
}
