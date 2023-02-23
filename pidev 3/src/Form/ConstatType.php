<?php

namespace App\Form;

use App\Entity\Constat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
class ConstatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateaccident', DateType::class,[ 'placeholder' => [
                'year' => 'Année', 'Month' => 'Moi', 'day' => 'Jours',]])
            ->add('lieu', null,['label'=>false,'attr'=>['placeholder'=>'Lieu']])
            ->add('imageaccident')

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Constat::class,
        ]);
    }
}
