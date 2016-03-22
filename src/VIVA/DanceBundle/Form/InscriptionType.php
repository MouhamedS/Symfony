<?php

namespace VIVA\DanceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('etat', 'text')
            ->add('adherent', new AdherentType())
            ->add('forfait', new ForfaitType())
            ->add('Valider', 'submit')
            ->add('Annuler', 'reset')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VIVA\DanceBundle\Entity\Inscription'
        ));
    }
}
