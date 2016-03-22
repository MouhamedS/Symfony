<?php

namespace VIVA\DanceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdherentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('adresse','text')
            ->add('dateNaissance', 'date')
            ->add('email', 'email')
            ->add('statut', 'text')
            ->add('ville', 'text')
            ->add('codePostal', 'number')
            ->add('ville', 'text')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VIVA\DanceBundle\Entity\Adherent'
        ));
    }
}
