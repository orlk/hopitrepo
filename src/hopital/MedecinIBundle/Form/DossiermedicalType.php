<?php

namespace hopital\MedecinIBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DossiermedicalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datecreation')
            ->add('codepatient','entity', array(
                    'class' => 'MedecinIBundle:Patient',
                    'property' => 'id'))
            ->add('codemedecin','hidden',array('read_only' => true))
                ->add('Valider','submit')
            ;
   
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hopital\MedecinIBundle\Entity\Dossiermedical'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hopital_medecinibundle_dossiermedical';
    }
}
