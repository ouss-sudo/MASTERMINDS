<?php

namespace App\Form;

use App\Entity\Constat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ConstatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateaccident', DateType::class,[ 'placeholder' => [
                'year' => 'Année', 'Mois' => 'Month', 'day' => 'Jours',]])
            ->add('lieu', null,['label'=>false,'attr'=>['placeholder'=>'Lieu']])
            ->add('imageFile',VichImageType::class,[
                'allow_delete' => true,
                'download_uri' => false,
                'label'=>false,
                'attr'=>
                    ['placeholder'=>'Choisir une image',
                        'button_label'=>'Importer']

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
