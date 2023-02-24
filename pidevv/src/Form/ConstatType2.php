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
           /* ->add('nomclient',TextType::class,[
                'disabled'=>true
            ])
            ->add('prenomclient',TextType::class,[
                'disabled'=>true
            ])
            ->add('email',TextType::class,[
                'disabled'=>true
            ])
            ->add('numerodetelephone',TextType::class,[
                'disabled'=>true
            ])
            ->add('lieu',TextType::class,[
                'disabled'=>true
            ])*/
            ->add('etat',ChoiceType::class,[
                'choices'=>[
                    'Traitée'=>'Traitée',
                    'En cours de traitement'=>'En cours de traitement',
                ]
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
