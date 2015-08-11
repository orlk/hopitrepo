<?php

namespace hopital\MedecinIBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hopital\MedecinIBundle\Entity\Rdvdisponible;
use hopital\MedecinIBundle\Form\RdvdisponibleType;

/**
 * Rdvdisponible controller.
 *
 */
class RdvdisponibleController extends Controller
{

    /**
     * Lists all Rdvdisponible entities.
     *
     */
    public function indexAction()
    {
         $id_user = $this->get("security.context")->getToken()->getUser()->getId();

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MedecinIBundle:Rdvdisponible')->findBy(array("cinm"=> $id_user));

        return $this->render('MedecinIBundle:Rdvdisponible:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Rdvdisponible entity.
     *
     */
    public function addAction()
    {
        $entity = new Rdvdisponible();
        $form = $this->createForm(new RdvdisponibleType(), $entity);
         $request = $this->get('request');
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rdvdisponible_show', array('id' => $entity->getId())));
        }

        return $this->render('MedecinIBundle:Rdvdisponible:new.html.twig', array(
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Rdvdisponible entity.
     *
     * @param Rdvdisponible $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Rdvdisponible $entity)
    {
        $form = $this->createForm(new RdvdisponibleType(), $entity, array(
            'action' => $this->generateUrl('rdvdisponible_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Rdvdisponible entity.
     *
     */
    public function newAction()
    {
        $entity = new Rdvdisponible();
        $form   = $this->createCreateForm($entity);

        return $this->render('MedecinIBundle:Rdvdisponible:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rdvdisponible entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MedecinIBundle:Rdvdisponible')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rdvdisponible entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MedecinIBundle:Rdvdisponible:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Rdvdisponible entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MedecinIBundle:Rdvdisponible')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rdvdisponible entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MedecinIBundle:Rdvdisponible:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Rdvdisponible entity.
    *
    * @param Rdvdisponible $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Rdvdisponible $entity)
    {
        $form = $this->createForm(new RdvdisponibleType(), $entity, array(
            'action' => $this->generateUrl('rdvdisponible_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Rdvdisponible entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MedecinIBundle:Rdvdisponible')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rdvdisponible entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new RdvdisponibleType(), $entity);
        
        $request = $this->get('request');
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rdvdisponible_edit', array('id' => $id)));
        }

        return $this->render('MedecinIBundle:Rdvdisponible:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Rdvdisponible entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MedecinIBundle:Rdvdisponible')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rdvdisponible entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rdvdisponible'));
    }

    /**
     * Creates a form to delete a Rdvdisponible entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rdvdisponible_delete', array('id' => $id)))
            ->setMethod('DELETE')
           ->add('submit', 'submit', array('label' => 'Delete','attr' => array('class' => 'bttn')))
            ->getForm()
        ;
    }
}
