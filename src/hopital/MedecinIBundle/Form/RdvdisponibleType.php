<?php

namespace hopital\MedecinIBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RdvdisponibleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dater')
            ->add('heurer')
            
          ->add('cinm','hidden',array('read_only' => true))
                 ->add('Valider','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hopital\MedecinIBundle\Entity\Rdvdisponible'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hopital_medecinibundle_rdvdisponible';
    }
}
