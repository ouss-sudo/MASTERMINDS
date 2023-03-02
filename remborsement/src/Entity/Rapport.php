<?php

namespace App\Entity;
use App\Controller\RapportType;
use App\Entity\Devis ; 
use App\Repository\RapportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Controller\Request;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RapportRepository::class)]
class Rapport
{
    

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
/**
     * @Assert\NotBlank(message=" date rapport doit etre non vide")
     * 
     *
     *     
     * 
     */
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_rapport = null;
    #[ORM\Column(length: 20)]
    
    /**
     * @Assert\NotBlank(message=" num serieVoiture doit etre non vide")
     * 
     *     
     *
     *     
     * 
     */
    private ?string $num_serievoiture = null;
/**
 * @Assert\NotBlank(message="Le modèle de la voiture est obligatoire")
 
 * @Assert\Length(
 *     min=2,
 *     minMessage="doit contenir au moins{{ limit }}caractères"
 * )*/
    #[ORM\Column(length: 30)]
    private ?string $modele_voiture = null;
  
   /**
     * @Assert\NotBlank(message=" date doit etre non vide")
     * 
     *       
     *
     *     
     * 
     */
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateMiseEnCirculation = null;
    /**
     * @Assert\NotBlank(message=" num serieVoiture doit etre non vide")
     * 
     *     
     *
     *     
     * 
     */
    #[ORM\Column(length: 40)]
    #[Assert\Regex(
        pattern: '/^([0-9]*TUN[0-9]*)$/',
        message: 'doit contenir seulement  numbres et TUN'

    )]
    private ?string $matricule = null;
/**
     * @Assert\NotBlank(message=" coleur voiture doit etre non vide")
     
     */
    #[ORM\Column(length: 30)]
    private ?string $couleur_voiture = null;

    #[ORM\Column(length: 30)]
    #[Assert\Regex(
      pattern: '/^[0-9]*$/',
      message: ' Le mandant doit être composé de chiffres uniquement.'
  )]
  /**
   * @Assert\NotBlank(message=" mondant doit etre non vide")
   * 
  * @Assert\GreaterThan(value=0, message="Le montant doit être supérieur à zéro.")
   
   *
   *     
   * 
   */  
      private ?string $mandant = null;

/**
     * @Assert\NotBlank(message=" conclusions doit etre non vide")
     * 
     * 
     */
    #[ORM\Column(length: 255)]
    private ?string $conclusions = null;
    #[Assert\Regex(
        pattern: '/^[0-9]*$/',
        message: ' Le montant_exprime doit être composé de chiffres uniquement.'
    )]
    /**
     * @Assert\NotBlank(message=" montant_exprime doit etre non vide")
     * 
         * @Assert\GreaterThan(value=0, message="Le montant doit être supérieur à zéro.")

     *
     *     
     * 
     */  
    #[ORM\Column]
    private ?float $montant_exprime = null;

    #[ORM\Column(length: 255)]
    private ?string $etat_rapport ="En attente";
/**
     * @Assert\NotBlank(message=" id expert doit etre non vide")
     * 
     * 
     */
    
    #[ORM\Column(length: 255)]
    private ?string $id_expert = null;

    #[ORM\OneToOne(mappedBy: 'rapport', cascade: ['persist', 'remove'])]
    private ?Devis $devis = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $file = null;

    

  
    public function getId(): ?int
    {
        return $this->id;
    }

 

    public function getDateRapport(): ?\DateTimeInterface
    {
        return $this->date_rapport;
    }

    public function setDateRapport(\DateTimeInterface $date_rapport): self
    {
        $this->date_rapport = $date_rapport;

        return $this;
    }

    public function getNumSerievoiture(): ?string
    {
        return $this->num_serievoiture;
    }

    public function setNumSerievoiture(string $num_serievoiture): self
    {
        $this->num_serievoiture = $num_serievoiture;

        return $this;
    }

    public function getModeleVoiture(): ?string
    {
        return $this->modele_voiture;
    }

    public function setModeleVoiture(string $modele_voiture): self
    {
        $this->modele_voiture = $modele_voiture;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getCouleurVoiture(): ?string
    {
        return $this->couleur_voiture;
    }

    public function setCouleurVoiture(string $couleur_voiture): self
    {
        $this->couleur_voiture = $couleur_voiture;

        return $this;
    }

    public function getDateMiseEnCirculation(): ?\DateTimeInterface
    {
        return $this->dateMiseEnCirculation;
    }

    public function setDateMiseEnCirculation(\DateTimeInterface $dateMiseEnCirculation): self
    {
        $this->dateMiseEnCirculation = $dateMiseEnCirculation;

        return $this;
    }

    public function getMandant(): ?string
    {
        return $this->mandant;
    }

    public function setMandant(string $mandant): self
    {
        $this->mandant = $mandant;

        return $this;
    }

    public function getPhotoAccident(): ?string
    {
        return $this->photo_accident;
    }

    public function setPhotoAccident(string $photo_accident): self
    {
        $this->photo_accident = $photo_accident;

        return $this;
    }

    public function getConclusions(): ?string
    {
        return $this->conclusions;
    }

    public function setConclusions(string $conclusions): self
    {
        $this->conclusions = $conclusions;

        return $this;
    }

    public function getMontantExprime(): ?float
    {
        return $this->montant_exprime;
    }

    public function setMontantExprime(float $montant_exprime): self
    {
        $this->montant_exprime = $montant_exprime;

        return $this;
    }

    public function getEtatRapport(): ?string
    {
        return $this->etat_rapport;
    }

    public function setEtatRapport(string $etat_rapport): self
    {
        $this->etat_rapport = $etat_rapport;

        return $this;
    }

    public function getIdExpert(): ?string
    {
        return $this->id_expert;
    }

    public function setIdExpert(string $id_expert): self
    {
        $this->id_expert = $id_expert;

        return $this;
    }

    public function getDevis(): ?Devis
    {
        return $this->devis;
    }

    public function setDevis(?Devis $devis): self
    {
        // unset the owning side of the relation if necessary
        if ($devis === null && $this->devis !== null) {
            $this->devis->setRapport(null);
        }

        // set the owning side of the relation if necessary
        if ($devis !== null && $devis->getRapport() !== $this) {
            $devis->setRapport($this);
        }

        $this->devis = $devis;

        return $this;
    }

    public function __toString()
    {
        return $this->id;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }

    
}
