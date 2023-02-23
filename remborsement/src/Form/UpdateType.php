<?php

namespace App\Form;
use App\Entity\Rapport;
use App\Entity\Devis;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Controller\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UpdateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
          
            ->add('date_rapport',DateType::class,[
                'disabled'=>true
            ])
            ->add('num_serievoiture',TextType::class,[
                'disabled'=>true
            ])
            ->add('modele_voiture',TextType::class,[
                'disabled'=>true
            ])
            ->add('matricule',TextType::class,[
                'disabled'=>true
            ])
            ->add('couleur_voiture',TextType::class,[
                'disabled'=>true
            ])
            ->add('dateMiseEnCirculation',DateType::class,[
                'disabled'=>true
            ])
            ->add('mandant',TextType::class,[
                'disabled'=>true
            ])
            ->add('file', FileType::class, [
                'mapped' => false,
                'required' => false,
            ])
            
            ->add('conclusions',TextareaType::class,[
                'disabled'=>true
            ])
            ->add('montant_exprime',TextType::class,[
                'disabled'=>true
            ])
            ->add('etat_rapport',ChoiceType::class,[
                'choices'=>[
                    'En cours traitement'=>'En cours traitement','Traitée'=>'Traitée',
                    
                ]
            ])
            
            ->add('id_expert',TextType::class,[
                'disabled'=>true
            ])
            ->add('modifier',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
