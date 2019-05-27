<?php

namespace App\Form;

use App\Entity\Camera;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CameraType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('OwnerName')
            ->add('OwnerFirstname')
            ->add('OwnerJob')
            ->add('Email')
            ->add('Telephone')
            ->add('Brand')
            ->add('Prix')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Camera::class,
        ]);
    }
}
