<?php

namespace App\Form;

use App\Entity\Job;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('poste', TextType::class, [
                'label' => 'Poste :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('type_job', TextType::class, [
                'label' => 'Domaine :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('company', TextType::class, [
                'label' => 'Compagnie :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('description', TextType::class, [
                'label' => 'Description :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('logo', TextType::class, [
                'label' => 'Logo :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('start_date', DateType::class, [
                'label' => "Début :",
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('end_date', DateType::class, [
                'label' => "Début :",
                'label_attr' => ['class' => 'text-admin-form'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Job::class,
        ]);
    }
}
