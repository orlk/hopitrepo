<?php

namespace hopital\MedecinIBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FichepatientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('taille')
            ->add('poid')
            ->add('tension')
            ->add('temperature')
            ->add('perimetre')
            ->add('groupeSanguin')
            ->add('datecreation')
            ->add('remarque','textarea')
            ->add('codedm','entity', array(
                    'class' => 'MedecinIBundle:Dossiermedical',
                    'property' => 'codeDm'))
                ->add('Valider','submit');
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'hopital\MedecinIBundle\Entity\Fichepatient'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hopital_medecinibundle_fichepatient';
    }
}
