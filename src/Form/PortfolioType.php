<?php

namespace App\Form;

use App\Entity\Portfolio;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PortfolioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('description', TextType::class, [
                'label' => 'Description :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('technology', TextType::class, [
                'label' => 'Technologie :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('image', TextType::class, [
                'label' => 'Image :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
            ->add('lien', TextType::class, [
                'label' => 'Lien :',
                'label_attr' => ['class' => 'text-admin-form'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Portfolio::class,
        ]);
    }
}
