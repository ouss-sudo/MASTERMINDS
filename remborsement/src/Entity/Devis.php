<?php

namespace App\Entity;
use App\Entity\Rapport;
use App\Repository\DevisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DevisRepository::class)]
class Devis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $montant_max = null;

    #[ORM\Column]
    private ?float $montant_min = null;

    #[ORM\OneToOne(inversedBy: 'num', cascade: ['persist', 'remove'])]
    private ?Rapport $num_rapport = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontantMax(): ?float
    {
        return $this->montant_max;
    }

    public function setMontantMax(float $montant_max): self
    {
        $this->montant_max = $montant_max;

        return $this;
    }

    public function getMontantMin(): ?float
    {
        return $this->montant_min;
    }

    public function setMontantMin(float $montant_min): self
    {
        $this->montant_min = $montant_min;

        return $this;
    }

    public function getNumRapport(): ?Rapport
    {
        return $this->num_rapport;
    }

    public function setNumRapport(?Rapport $num_rapport): self
    {
        $this->num_rapport = $num_rapport;

        return $this;
    }
}
