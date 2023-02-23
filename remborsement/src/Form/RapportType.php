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

class RapportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
          
           
            ->add('num_serievoiture')
            ->add('modele_voiture')
            ->add('matricule')
            ->add('couleur_voiture')
            ->add('dateMiseEnCirculation')
            ->add('mandant')
          
            
            ->add('conclusions',TextareaType::class)
            ->add('montant_exprime')
            ->add('file', FileType::class, [
                'mapped' => false,
                'required' => false,
            ])
            
            ->add('id_expert')
            ->add('ajouter',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
