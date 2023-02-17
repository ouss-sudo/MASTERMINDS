<?php

namespace App\Entity;
use App\Controller\RapportType;
use App\Repository\RapportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Controller\Request;
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
     * @Assert\NotBlank(message=" numrapport doit etre non vide")
     * @Assert\Length(
     *      min = 1,
     *      minMessage=" Entrer un titre au mini de 1 caracteres"
     *
     *     )
     * 
     */
    #[ORM\Column]
    private ?int $num_rapport = null;
/**
     * @Assert\NotBlank(message=" date rapport doit etre non vide")
     * 
     *
     *     
     * 
     */
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_rapport = null;
       /**
     * @Assert\NotBlank(message=" NUM serie de voiture doit etre non vide")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer un titre au mini de 5 caracteres"
     *
     *     )
     * 
     */
    #[ORM\Column(length: 20)]
    private ?string $num_serievoiture = null;
  /**
     * @Assert\NotBlank(message=" modele voiture doit etre non vide")
     * 
     *     
     *
     *     
     * 
     */
    #[ORM\Column(length: 30)]
    private ?string $modele_voiture = null;
/**
     * @Assert\NotBlank(message=" modele voiture doit etre non vide")
     * @Assert\Length(
     *       min = 5,
     *      minMessage=" Entrer un matricule au mini de 5 caracteres"
     *
     *     )
     * 
     */
    #[ORM\Column(length: 30)]
    private ?string $matricule = null;
/**
     * @Assert\NotBlank(message=" coleur voiture doit etre non vide")
     
     */
    #[ORM\Column(length: 30)]
    private ?string $couleur_voiture = null;
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
     * @Assert\NotBlank(message=" mandant doit etre non vide")
     * 
     * 
     */
    #[ORM\Column(length: 40)]
    private ?string $mandant = null;
/**
     * @Assert\NotBlank(message=" photo_accident doit etre non vide")
     * 
     * 
     */
    #[ORM\Column(length: 255)]
    private ?string $photo_accident = null;
/**
     * @Assert\NotBlank(message=" conclusions doit etre non vide")
     * 
     * 
     */
    #[ORM\Column(length: 255)]
    private ?string $conclusions = null;
/**
     * @Assert\NotBlank(message=" montant_exprime doit etre non vide")
     * 
     * 
     */
    #[ORM\Column]
    private ?float $montant_exprime = null;

    #[ORM\Column(length: 255)]
    private ?string $etat_rapport = null;
/**
     * @Assert\NotBlank(message=" id expert doit etre non vide")
     * 
     * 
     */
    
    #[ORM\Column(length: 255)]
    private ?string $id_expert = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumRapport(): ?int
    {
        return $this->num_rapport;
    }

    public function setNumRapport(int $num_rapport): self
    {
        $this->num_rapport = $num_rapport;

        return $this;
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
}
