<?php

namespace App\Form;

use App\Entity\Biens;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BiensType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pieces')
            ->add('chambre')
            ->add('surface')
            ->add('adresse')
            ->add('prix')
            ->add('charge')
            ->add('images')
            ->add('description')
            ->add('date_construction')
            ->add('etage')
            ->add('cuisine')
            ->add('bain')
            ->add('energie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Biens::class,
        ]);
    }
}
