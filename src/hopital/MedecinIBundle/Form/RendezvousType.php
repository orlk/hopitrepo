<?php

namespace hopital\MedecinIBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RendezvousType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cinP')
            ->add('date')
            ->add('heure')
            ->add('commentaire')
            ->add('validation')
            ->add('cinm')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hopital\MedecinIBundle\Entity\Rendezvous'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hopital_medecinibundle_rendezvous';
    }
}
