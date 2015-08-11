<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminsAdmin
 *
 * @author Hichem
 */

namespace Users\UsersBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;

use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class AdminsAdmin extends Admin {

    //put your code here

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('username', 'text', array('label' => 'Post Title'))
               
              


        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                  ->add('username')
              

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('username', 'text', array('label' => "nom de l'administrateur"))
                ->add('email', 'text', array('label' => "Email"))
                ->add('last_login', 'date', array('label' => "last_login"))
                ->add('_action', 'actions', array('actions' => array('view' => array(), 'edit' => array(),
                        'delete' => array(),)))
               
        ;
    }

}
