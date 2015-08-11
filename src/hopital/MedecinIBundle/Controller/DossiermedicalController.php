<?php

namespace hopital\MedecinIBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use hopital\UserBundle\Entity\User;
use hopital\MedecinIBundle\Entity\Dossiermedical;
use hopital\MedecinIBundle\Form\DossiermedicalType;

/**
 * Dossiermedical controller.
 *
 */
class DossiermedicalController extends Controller
{

    /**
     * Lists all Dossiermedical entities.
     *
     */
    public function indexAction()
    {
     $id_user = $this->get("security.context")->getToken()->getUser()->getId();
    
         
       $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MedecinIBundle:Dossiermedical')->findBy(array("codemedecin"=> $id_user));
     
        return $this->render('MedecinIBundle:Dossiermedical:index.html.twig', array(
            'entities' => $entities,
        ));
    
    }
    /**
     * Creates a new Dossiermedical entity.
     *
     */
    public function addAction()
    {
        
        $entity = new Dossiermedical();
        $form = $this->createForm(new DossiermedicalType(), $entity);
         $request = $this->get('request');
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dossiermedical_show', array('codeDm' => $entity->getCodedm())));
        }

        return $this->render('MedecinIBundle:Dossiermedical:new.html.twig', array(
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Dossiermedical entity.
     *
     * @param Dossiermedical $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Dossiermedical $entity)
    {
        $form = $this->createForm(new DossiermedicalType(), $entity, array(
            'action' => $this->generateUrl('dossiermedical_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Dossiermedical entity.
     *
     */
    public function newAction()
    {
        $entity = new Dossiermedical();
        $form   = $this->createCreateForm($entity);

        return $this->render('MedecinIBundle:Dossiermedical:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Dossiermedical entity.
     *
     */
    public function showAction($codeDm)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MedecinIBundle:Dossiermedical')->find($codeDm);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dossiermedical entity.');
        }

        $deleteForm = $this->createDeleteForm($codeDm);

        return $this->render('MedecinIBundle:Dossiermedical:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Dossiermedical entity.
     *
     */
    public function editAction($codeDm)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MedecinIBundle:Dossiermedical')->find($codeDm);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dossiermedical entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($codeDm);

        return $this->render('MedecinIBundle:Dossiermedical:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Dossiermedical entity.
    *
    * @param Dossiermedical $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Dossiermedical $entity)
    {
        $form = $this->createForm(new DossiermedicalType(), $entity, array(
            'action' => $this->generateUrl('dossiermedical_update', array('codeDm' => $entity->getcodeDm())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Dossiermedical entity.
     *
     */
    public function updateAction( $codeDm)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MedecinIBundle:Dossiermedical')->find($codeDm);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dossiermedical entity.');
        }

        $deleteForm = $this->createDeleteForm($codeDm);
        
       
        $editForm = $this->createForm(new DossiermedicalType(), $entity);
        
        $request = $this->get('request');
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dossiermedical_edit', array('codeDm' => $codeDm)));
        }

        return $this->render('MedecinIBundle:Dossiermedical:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Dossiermedical entity.
     *
     */
    public function deleteAction(Request $request, $codeDm)
    {
        $form = $this->createDeleteForm($codeDm);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MedecinIBundle:Dossiermedical')->find($codeDm);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dossiermedical entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dossiermedical'));
    }

    /**
     * Creates a form to delete a Dossiermedical entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($codeDm)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dossiermedical_delete', array('codeDm' => $codeDm)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete','attr' => array('class' => 'bttn')))
            ->getForm()
        ;
    }
    public function finddmAction() {
        $id_user = $this->get("security.context")->getToken()->getUser()->getId();

       $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MedecinIBundle:Dossiermedical')->findBy(array("codemedecin"=> $id_user));
        $Request = $this->get('request');
        if ($Request->getMethod() == "POST") {
            $search = $Request->get('search');

            $entities = $em->getRepository("MedecinIBundle:Dossiermedical")
                    ->findDmParametre($search, $id_user);
        }
       return $this->render('MedecinIBundle:Dossiermedical:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    
}
