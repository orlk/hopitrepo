<?php

namespace FactureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FactureBundle\Entity\Administrateur;
use FactureBundle\form\LoginForm;
use FactureBundle\Entity\Medica;

class AdminController extends Controller {

    public function indexAction() { $admin = new Administrateur(); $form = $this->createForm(new LoginForm(), $admin);  $request = $this->getRequest();
      $form->handleRequest($request);
        $session = $request->getSession()->get('admin');
        if ($request->getMethod() == 'POST') {
            $login = $form['login']->getData();
            $password = $form['password']->getData();
            $em = $this->getDoctrine()->getEntityManager();
            $query = $em->createQueryBuilder()->select('a')
                    ->from('FactureBundle:Administrateur', 'a')
                    ->where('a.login=:login')
                    ->setParameter('login', $login)
                    ->andWhere('a.password=:password')
                    ->setParameter('password', $password)
                    ->getQuery();
            $admin = $query->getOneOrNullResult();
            if ($admin != NULL) {
                $request->getSession()->set('admin', $admin);
                $session = $request->getSession()->get('admin');
        }}
        return $this->render('FactureBundle:Admin:index.html.twig', array('form' => $form->createView(), 's' => $session));
    }   
       
      
      

    public function logoutAction() {
        $request = $this->getRequest();
        $request->getSession()->remove('admin');
        return $this->redirectToRoute('Admin');
    }

    public function ListAction() {
        $request = $this->getRequest();
        $session = $request->getSession()->get('admin');
        $em = $this->getDoctrine()->getManager();
        $medicas = $em->getRepository('FactureBundle:Medica')->findAll();
        return $this->render('FactureBundle:Admin:Medica.html.twig', array('s' => $session, 'medicas' => $medicas));
    }

    public function DeleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $media = $em->getRepository('FactureBundle:Medica')->find($id);
        $em->remove($media);
        $em->flush();
        return $this->redirectToRoute('medicalist');
    }
    public function  updateAction($id)
    {   $request = $this->getRequest();
        $session = $request->getSession()->get('admin');
        $em = $this->getDoctrine()->getManager();
        $medica = $em->getRepository('FactureBundle:Medica')->find($id);
          return $this->render('FactureBundle:Admin:update.html.twig', array('s' => $session, 'medica' => $medica));
        
    }
     public function  ajoutAction()
    {   $request = $this->getRequest();
        $session = $request->getSession()->get('admin');
    
          return $this->render('FactureBundle:Admin:ajout.html.twig', array('s' => $session));
        
    }
    public function persistAction()
    { $request = $this->getRequest();$id=$request->get('id'); $nom=$request->get('nom'); $type=$request->get('type');  $quantite=$request->get('quantite');
     $prix=$request->get('prix');  $libelle=$request->get('libelle');   $medica=new Medica();
     
         $em = $this->getDoctrine()->getManager();
         if($id!=NULL)
        {
           $medica = $em->getRepository('FactureBundle:Medica')->find($id);
            $medica->setLibelle($libelle);
        $medica->setNommedica($nom);
        $medica->setPrix($prix);
        $medica->setQuantitemedica($quantite);
        $medica->setTypemedica($type);
            $em->flush();
        }
        else
        {   
             $medica->setLibelle($libelle); $medica->setNommedica($nom);   $medica->setPrix($prix);$medica->setQuantitemedica($quantite);
       $medica->setTypemedica($type);
         $em->persist($medica);
         $em->flush();
        }
    return $this->redirectToRoute('medicalist');}
       
       
     
        
        
       
      
        
      
       
       

}
