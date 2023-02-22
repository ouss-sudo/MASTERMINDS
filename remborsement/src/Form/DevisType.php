<?php

namespace App\Form;
use App\Entity\Devis;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Controller\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Rapport;
use App\Entity\RapportType;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
    // Champ pour sélectionner le rapport associé
    
    ->add('montant_min') 
    ->add('montant_max')
    ->add('rapport', EntityType::class, [
        'class' => Rapport::class,
        'choice_label' => 'id',
        'placeholder' => 'Choisissez un rapport',
    ])
    ->add('ajouter',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Devis::class,
            // Configure your form options here
        ]);
    }

}
