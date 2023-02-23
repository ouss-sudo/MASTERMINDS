<?php

namespace App\Entity;

use App\Repository\ConstatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: ConstatRepository::class)]
class Constat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir la date de l'accident")] //l'annotation Assert\NotBlank pour  s'assurer qu'un champs dans un formulaire n'est pas vide
    private ?\DateTime $dateaccident = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir le lieu de l'accident")]
    private ?string $lieu = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateconstat = null;

    #[ORM\Column(length: 2000, nullable: true)]
    private ?string $imageaccident = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $etat = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $nomclient = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $prenomclient = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $numerodetelephone = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateaccident(): ?\DateTime
    {
        return $this->dateaccident;
    }

    public function setDateaccident(?\DateTime $dateaccident): self
    {
        $this->dateaccident = $dateaccident;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDateconstat(): ?\DateTime
    {
        return $this->dateconstat;
    }

    public function setDateconstat(?\DateTime $dateconstat): self
    {
        $this->dateconstat = $dateconstat;

        return $this;
    }

    public function getImageaccident(): ?string
    {
        return $this->imageaccident;
    }

    public function setImageaccident(?string $imageaccident): self
    {
        $this->imageaccident = $imageaccident;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(?string $nomclient): self
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getPrenomclient(): ?string
    {
        return $this->prenomclient;
    }

    public function setPrenomclient(?string $prenomclient): self
    {
        $this->prenomclient = $prenomclient;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNumerodetelephone(): ?string
    {
        return $this->numerodetelephone;
    }

    public function setNumerodetelephone(?string $numerodetelephone): self
    {
        $this->numerodetelephone = $numerodetelephone;

        return $this;
    }
}
