<?php

namespace App\Form;

use App\Entity\Camera;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CameraType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('OwnerName', TextType::class, ['attr' => ['class'=>'form-control', 'placeholder'=>'Votre Nom']])
            ->add('OwnerFirstname', TextType::class, ['attr' => ['class'=>'form-control', 'placeholder'=>'Votre Prénom']])
            ->add('OwnerJob', TextType::class, ['attr' => ['class'=>'form-control', 'placeholder'=>'Votre Titre']])
            ->add('Email', EmailType::class, ['attr' => ['class'=>'form-control', 'placeholder'=>'Votre Email']])
            ->add('Telephone', TelType::class, ['attr' => ['class'=>'form-control', 'placeholder'=>'Votre Téléphone']])
            ->add('Brand', TextType::class, ['attr' => ['class'=>'form-control', 'placeholder'=>'Votre Caméra']])
            ->add('Prix', IntegerType::class, ['attr' => ['class'=>'form-control', 'placeholder'=>'Votre Tarif / Jour']])
            ->add('valider', SubmitType::class, ['attr' => ['class'=>'btn btn-secondary', 'type' => 'button']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Camera::class,
        ]);
    }
}
