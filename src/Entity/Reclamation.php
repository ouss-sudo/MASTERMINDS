<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

   #[ORM\Column(length: 100, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir l'objet de votre réclamation!")]//l'annotation Assert\NotBlank pour  s'assurer qu'un champs dans un formulaire n'est pas vide
    private ?string $objet = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir les détails de votre réclamation")]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateReclamation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateTraitement = null;

    #[ORM\Column(length: 100)]
    private ?string $etat = 'En attente';

   #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomclient = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenomclient = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $numtelephone = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $mail): self
    {
        $this->email = $mail;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(?string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateReclamation(): ?\DateTime
    {
        return $this->dateReclamation;
    }

    public function setDateReclamation(\DateTime $dateReclamation): self
    {
        $this->dateReclamation = $dateReclamation;

        return $this;
    }

    public function getDateTraitement(): ?\DateTime
    {
        return $this->dateTraitement;
    }

    public function setDateTraitement(?\DateTime $dateTraitement): self
    {
        $this->dateTraitement = $dateTraitement;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
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

    public function getNumtelephone(): ?string
    {
        return $this->numtelephone;
    }

    public function setNumtelephone(?string $numTel): self
    {
        $this->numtelephone = $numTel;

        return $this;
    }
}
