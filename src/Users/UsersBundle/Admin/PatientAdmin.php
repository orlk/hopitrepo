<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PatientsAdmin
 *
 * @author Hichem
 */

namespace Users\UsersBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
//use Sonata\AdminBundle\Admin\Admin;
//use Whyte624\SonataAdminExtraExportBundle\Admin\AdminExtraExportTrait;

class PatientAdmin extends Admin {
    /*  public function getTemplate($name) {

      switch ($name) {

      /* case 'edit':

      return 'MyAppBundle::my-custom-edit.html.twig';

      break; */

    /*      default:

      return parent::getTemplate($name);

      break;
      }
      } */

    //bigin hichem mode filtr tactiv lina :p
    //use AdminExtraExportTrait;
     public $supportsPreviewMode = true;
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('nom')
                ->add('cin')

//filtr tactiv lina :p
        ;
    }

    //toufa lina  :p
    protected function configureListFields(ListMapper $listMapper) {

        $listMapper
                ->addIdentifier('nom', 'text', array('label' => "Nom"))
                ->add('prenom', 'text', array('label' => "Prénom"))
                ->add('Cin', 'text', array('label' => "Cin"))
                ->add('Email', 'text', array('label' => "Email"))
                ->add('telephone', 'text', array('label' => "Telephone"))
                //->add('Adresse', 'text', array('label' => "Adresse")) me5tha blass zeyda :p
                ->add('_action', 'actions', array('actions' => array('view' => array(), 'edit' => array(),
                        'delete' => array(),)))
        ;
    }

    /**

     * {@inheritdoc}

     */
    protected function configureShowFields(ShowMapper $showMapper) {

        $showMapper
                ->with('Information generale')
                ->add('nom', 'text', array('label' => "Nom"))
                ->add('prenom', 'text', array('label' => "Prénom"))
                ->add('Cin', 'text', array('label' => "Cin"))
                ->add('Email', 'text', array('label' => "Email"))
                ->add('telephone', 'text', array('label' => "Telephone"))
                ->add('Adresse', 'text', array('label' => "Adresse"))
                ->add('login', 'text', array('label' => "Login"))
                ->add('code', 'text', array('label' => "Code "))
                ->add('dateNaissance', 'text', array('label' => "DateNaissance "))
                ->add('sexe', 'text', array('label' => "Sexe "))
                ->end()

        ;
    }

    /**

     * {@inheritdoc}

     */
// Fields wich are shown in you Animal Admin Tab

    protected function configureFormFields(FormMapper $formMapper) {

        $formMapper
                ->add('nom', 'text', array('label' => 'nom'))
                ->add('prenom', 'text', array('label' => "Prénom"))
                ->add('Cin', 'text', array('label' => "Cin"))
                ->add('Email', 'text', array('label' => "Email"))
                ->add('telephone', 'text', array('label' => "Telephone"))
                ->add('Adresse', 'text', array('label' => "Adresse"))
                ->add('login', 'text', array('label' => "Login"))
                ->add('password', 'text', array('label' => "Password "))
                ->add('code', 'text', array('label' => "Code "))
                ->add('dateNaissance', 'text', array('label' => "DateNaissance "))
                ->add('sexe', 'text', array('label' => "sexe "))
        ;
    }

  

}
