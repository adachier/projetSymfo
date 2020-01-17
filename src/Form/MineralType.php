<?php

namespace App\Form;

use App\Entity\Mineral;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MineralType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('continent')
            ->add('Region')
            ->add('pays')
            ->add('Mine')
            ->add('name')
            ->add('Price')
            ->add('Gps')
            ->add('Purete')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mineral::class,
        ]);
    }
}
