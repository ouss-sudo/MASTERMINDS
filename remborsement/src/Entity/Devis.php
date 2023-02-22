<?php

namespace App\Entity;
use App\Controller\DevisType;
use App\Entity\Rapport ; 
use App\Repository\RapportRepository;
use App\Controller\Request;
use App\Repository\DevisRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: DevisRepository::class)]
class Devis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $montant_min = null;

    #[ORM\Column]
    private ?float $montant_max = null;

    #[ORM\OneToOne(inversedBy: 'devis', cascade: ['persist', 'remove'])]
    private ?Rapport $rapport = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMontantMax(): ?float
    {
        return $this->montant_max;
    }

    public function setMontantMax(float $montant_max): self
    {
        $this->montant_max = $montant_max;

        return $this;
    }

    public function getRapport(): ?Rapport
    {
        return $this->rapport;
    }

    public function setRapport(?Rapport $rapport): self
    {
        $this->rapport = $rapport;

        return $this;
    }
}
