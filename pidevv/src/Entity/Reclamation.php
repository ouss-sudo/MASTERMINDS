<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("reclamations:read")]
    private ?int $id = null;


    #[ORM\Column(length: 50, nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir l'objet de votre réclamation!")]//l'annotation Assert\NotBlank pour  s'assurer qu'un champs dans un formulaire n'est pas vide
    #[Groups("reclamations:read")]
    private ?string $objet = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir les détails de votre réclamation")]
    #[Groups("reclamations:read")]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups("reclamations:read")]
    private ?\DateTime $dateReclamation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Groups("reclamations:read")]
    private ?\DateTime $dateTraitement = null;

    #[ORM\Column(length: 100)]
    private ?string $etat = 'En attente';

    #[ORM\OneToMany(mappedBy: 'reclamation', targetEntity: Reponse::class)]
    private Collection $reponses;
    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'reclamations')]
    private Collection $users;

    public function __construct()
    {
        $this->reponses = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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




    /**
     * @return Collection<int, Reponse>
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses->add($reponse);
            $reponse->setReclamation($this);
        }

        return $this;
    }

    public function removeReponse(Reponse $reponse): self
    {
        if ($this->reponses->removeElement($reponse)) {
            // set the owning side to null (unless already changed)
            if ($reponse->getReclamation() === $this) {
                $reponse->setReclamation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }
    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        $this->users->removeElement($user);

        return $this;
    }
}
