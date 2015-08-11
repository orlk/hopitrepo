<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChambreAdmin
 *
 * @author Hichem
 */

namespace Users\UsersBundle\Admin;

use Users\UsersBundle\Entity\Patient;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ChambreAdmin extends Admin {

    public $supportsPreviewMode = true;

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('numchambre')

        ;
    }

    protected function configureListFields(ListMapper $listMapper) {

        $listMapper
                ->addIdentifier('idchambre', 'number', array('label' => "idchambre"))
                ->addIdentifier('numchambre', 'number', array('label' => "numchambre"))
                ->addIdentifier('typechambre', 'number', array('label' => "typechambre"))
                ->addIdentifier('idPatient', 'text', array('label' => "idPatient"))

                /*
                  ->addIdentifier('date_arriv', 'date', array('label' => "date_arriv"))

                  ->addIdentifier('date_sort', 'date', array('label' => "date_sort"))
                  ->addIdentifier('idPatient', 'date', array('label' => "idPatient"))
                  ->addIdentifier('disponibiliter', 'date', array('label' => "disponibiliter")) */
                ->add('_action', 'actions', array('actions' => array('view' => array(), 'edit' => array(),
                        'delete' => array(),)))
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper) {

        $showMapper
                ->with('Information generale')
                ->add('idchambre', 'number', array('label' => "idchambre"))
                ->add('numchambre', 'number', array('label' => "numchambre"))
                ->add('typechambre', 'text', array('label' => "typechambre"))
                ->add('idPatient', 'text', array('label' => "idPatient"))
                ->add('date_arriv', 'date', array('label' => "date_arriv"))
                ->add('date_sort', 'date', array('label' => "date_sort"))
                ->add('disponibiliter', 'number', array('label' => "disponibiliter"))
                ->end()

        ;
    }

    protected function configureFormFields(FormMapper $formMapper) {

        $formMapper
                ->add('numchambre', 'number', array('label' => "numchambre"))
                ->add('typechambre', 'text', array('label' => "typechambre"))
                ->add('date_arriv', 'date', array('label' => "date_arriv"))
                ->add('date_sort', 'date', array('label' => "date_sort"))
                ->add('disponibiliter', 'number', array('label' => "disponibiliter"))
              //   ->add('idpatient', 'text', array('label' => "idPatient"))

                 ->add('idpatient', 'collection', array(
                'type'         => 'text',
                'allow_add'    => true,
            ));
        

        
    }

}
