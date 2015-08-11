<?php

namespace hopital\MedecinIBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use hopital\MedecinIBundle\Entity\Fichepatient;
use hopital\MedecinIBundle\Form\FichepatientType;

/**
 * Fichepatient controller.
 *
 */
class FichepatientController extends Controller
{

    /**
     * Lists all Fichepatient entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MedecinIBundle:Fichepatient')->findAll();

        return $this->render('MedecinIBundle:Fichepatient:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Fichepatient entity.
     *
     */
    public function addAction()
    {
        $entity = new Fichepatient();
        $form = $this->createForm(new FichepatientType(), $entity);
         $request = $this->get('request');
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fichepatient_show', array('id' => $entity->getId())));
        }

        return $this->render('MedecinIBundle:Fichepatient:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Fichepatient entity.
     *
     * @param Fichepatient $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Fichepatient $entity)
    {
        $form = $this->createForm(new FichepatientType(), $entity, array(
            'action' => $this->generateUrl('fichepatient_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Fichepatient entity.
     *
     */
    public function newAction()
    {
        $entity = new Fichepatient();
        $form   = $this->createCreateForm($entity);

        return $this->render('MedecinIBundle:Fichepatient:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fichepatient entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MedecinIBundle:Fichepatient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fichepatient entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MedecinIBundle:Fichepatient:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Fichepatient entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MedecinIBundle:Fichepatient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fichepatient entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MedecinIBundle:Fichepatient:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Fichepatient entity.
    *
    * @param Fichepatient $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Fichepatient $entity)
    {
        $form = $this->createForm(new FichepatientType(), $entity, array(
            'action' => $this->generateUrl('fichepatient_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Fichepatient entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MedecinIBundle:Fichepatient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fichepatient entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
         $editForm = $this->createForm(new FichepatientType(), $entity);
        
        $request = $this->get('request');
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fichepatient_show', array('id' => $id)));
        }

        return $this->render('MedecinIBundle:Fichepatient:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Fichepatient entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MedecinIBundle:Fichepatient')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Fichepatient entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fichepatient'));
    }

    /**
     * Creates a form to delete a Fichepatient entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fichepatient_delete', array('id' => $id)))
            ->setMethod('DELETE')
           ->add('submit', 'submit', array('label' => 'Delete','attr' => array('class' => 'bttn')))
            ->getForm()
        ;
    }
 function rechercheFicheAction($codeDm)
    {
      $em = $this->getDoctrine()->getManager();
 
        $entities = $em->getRepository('MedecinIBundle:Fichepatient')->findBy(array("codedm"=>$codeDm));

        return $this->render('MedecinIBundle:Fichepatient:index.html.twig', array(
            'entities' => $entities,
        ));   
        
    }
}
