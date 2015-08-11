<?php

/**
 * Description of FacturesAdmin
 *
 * @author sarah
 */

namespace Users\UsersBundle\Admin;

use Users\UsersBundle\Entity\Facture;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

//use Sonata\AdminBundle\Admin\Admin;
//use Whyte624\SonataAdminExtraExportBundle\Admin\AdminExtraExportTrait;

class FactureAdmin extends Admin {

    //bigin hichem mode filtr tactiv lina :p
    //use AdminExtraExportTrait;
    public $supportsPreviewMode = true;

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('idfacture')



//filtr tactiv lina :p
        ;
    }

    //toufa lina  :p
    protected function configureListFields(ListMapper $listMapper) {

        $listMapper
                ->addIdentifier('idfacture', 'number', array('label' => "idfacture"))
                ->add('prix_consultation', 'number', array('label' => "prix consultation"))
                ->add('prixChambre', 'number', array('label' => "prix chambre"))
                ->add('prix_trait', 'number', array('label' => "prix_trait"))
                ->add('prix_exam_labo', 'number', array('label' => "prix_exam_labo"))
                ->add('prix_total', 'number', array('label' => "prix_total"))
                ->add('datefacture', 'date', array('label' => "date_facture"))
              
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
                ->add('idfacture', 'number', array('label' => "idfacture"))
                ->add('prixconsultation', 'number', array('label' => "prix consultation"))
                ->add('prixchambre', 'number', array('label' => "prix chambre"))
                ->add('prixtrait', 'number', array('label' => "prix trait"))
                ->add('prixexam_labo', 'number', array('label' => "prix_exam labo"))
                ->add('prixtotal', 'number', array('label' => "prix total"))
                ->add('datefacture', 'date', array('label' => "date facture"))
                //->add('idPatient', 'number', array('label' => "idPatient"))
                ->end()

        ;
    }

    /**

     * {@inheritdoc}

     */
// Fields wich are shown in you Animal Admin Tab

    protected function configureFormFields(FormMapper $formMapper) {

        $formMapper
                ->add('prix_consultation', 'number', array('label' => 'prix consultation'))
                ->add('prixchambre', 'number', array('label' => "prix chambre"))
                ->add('prixtrait', 'number', array('label' => "prix trait"))
                ->add('prixexam_labo', 'number', array('label' => "prix exam_labo"))
                ->add('prixtotal', 'number', array('label' => "prix total"))
                ->add('datefacture', 'date', array('label' => "date facture"))
        // ->add('idPatient', 'number', array('label' => "idPatient"))

        ;
    }

}
