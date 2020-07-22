<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('school', TextType::class, [
                'label' => 'École :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('degree', TextType::class, [
                'label' => 'Diplôme :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('field_of_study', TextType::class, [
                'label' => 'Domaine :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('year_of_start', IntegerType::class, [
                'label' => 'Début :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('year_of_end', IntegerType::class, [
                'label' => 'Fin :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}
