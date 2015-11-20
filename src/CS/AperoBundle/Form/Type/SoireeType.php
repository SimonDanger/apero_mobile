<?php

namespace CS\AperoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SoireeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label' => 'Nom de la Soirée'))
            ->add('paiement', 'text', array('label' => 'Coût de la Soirée'))
            ->add('description', 'text', array('label' => 'Description'))
            ->add('date', 'datetime', array('label' => 'Date'))
            ->add('nombreparticipant', 'text', array('label' => 'Nombre de participant'))
            ->add('save', 'submit', array('label' => 'Envoyez'))
        ;
    }
    public function getName()
    {
        return 'Soiree';
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CS\AperoBundle\Entity\Soiree',
        ));
    }
}