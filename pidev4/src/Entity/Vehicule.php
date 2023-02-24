<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
class Vehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir le numéro de contrat")]
    private ?int $num_contrat = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir le nom de l'agence")]
    private ?string $nomagence = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir le nom du conducteur")]
    private ?string $nomconducteur = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir le prénom du conducteur")]
    private ?string $prenomconducteur = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir l'adresse du conducteur")]
    private ?string $adresse = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir l'immatriculation de la voiture")]
    private ?string $immatriculation = null;

    #[ORM\ManyToOne(inversedBy: 'vehicules')]
    private ?Constat $constat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumContrat(): ?int
    {
        return $this->num_contrat;
    }

    public function setNumContrat(?int $num_contrat): self
    {
        $this->num_contrat = $num_contrat;

        return $this;
    }

    public function getNomagence(): ?string
    {
        return $this->nomagence;
    }

    public function setNomagence(?string $nomagence): self
    {
        $this->nomagence = $nomagence;

        return $this;
    }

    public function getNomconducteur(): ?string
    {
        return $this->nomconducteur;
    }

    public function setNomconducteur(?string $nomconducteur): self
    {
        $this->nomconducteur = $nomconducteur;

        return $this;
    }

    public function getPrenomconducteur(): ?string
    {
        return $this->prenomconducteur;
    }

    public function setPrenomconducteur(?string $prenomconducteur): self
    {
        $this->prenomconducteur = $prenomconducteur;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getConstat(): ?Constat
    {
        return $this->constat;
    }

    public function setConstat(?Constat $constat): self
    {
        $this->constat = $constat;

        return $this;
    }
}
