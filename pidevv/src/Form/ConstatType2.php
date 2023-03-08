<?php

namespace App\Form;

use App\Entity\Constat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ConstatType2 extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lieu',TextType::class,[
                'disabled'=>true
            ])
            ->add('dateaccident', DateType::class,[ 'placeholder' => [
                'year' => 'Année', 'Mois' => 'Month', 'day' => 'Jours',],'disabled'=>true])
            ->add('etat',ChoiceType::class,[
                'choices'=>[
                    'Traitée'=>'Traitée',
                    'En cours de traitement'=>'En cours de traitement',
                ]
            ])

            ->add('imageFile',VichImageType::class,[
                'allow_delete' => true,
                'download_uri' => false,
                'disabled'=>true,
                'label'=>false,
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Constat::class,
        ]);
    }
}
