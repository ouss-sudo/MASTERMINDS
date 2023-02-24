<?php

namespace App\Form;

use App\Entity\Reclamation;
use Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

class ReclamationType2 extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomclient',TextType::class,[
                'disabled'=>true
            ])
            ->add('prenomclient',TextType::class,[
                'disabled'=>true
            ])
            ->add('email',TextType::class,[
                'disabled'=>true
            ])
            ->add('numtelephone',TextType::class,[
                'disabled'=>true
            ])
            ->add('description',TextareaType::class,[
                'disabled'=>true
            ])
            ->add('objet',TextType::class,[
                'disabled'=>true
            ])

            ->add('etat',ChoiceType::class,[
                'choices'=>[
                   'Traitée'=>'Traitée',
                    'En cours de traitement'=>'En cours de traitement',
                ]
            ]);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
