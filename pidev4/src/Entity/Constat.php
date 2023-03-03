<?php

namespace App\Entity;

use App\Repository\ConstatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: ConstatRepository::class)]
#[Vich\Uploadable]
class Constat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("constats:read")]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\NotBlank(message:"Date obligatoire")]
    #[Assert\LessThanOrEqual("today")] //l'annotation Assert\NotBlank pour  s'assurer qu'un champs dans un formulaire n'est pas vide
    #[Groups("constats:read")]
    private ?\DateTime $dateaccident = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[Assert\NotBlank(message:"Veuillez saisir le lieu de l'accident")]
    #[Groups("constats:read")]
    private ?string $lieu = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Groups("constats:read")]
    private ?\DateTime $dateconstat = null;

    #[ORM\Column(length: 2000, nullable: true)]
    #[Groups("constats:read")]
    private ?string $imageaccident = null;

    #[Vich\UploadableField(mapping:"product_images", fileNameProperty:"imageaccident")]
    #[Assert\NotBlank(message:"veuiller ajouter une image")]
    /**
     * @var File
     */
    private $imageFile;
    #[ORM\Column(length: 50, nullable: true)]
    #[Groups("constats:read")]
    private ?string $etat = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $nomclient = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $prenomclient = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $numerodetelephone = null;

    #[ORM\OneToMany(mappedBy: 'constat', targetEntity: Vehicule::class)]
    private Collection $vehicules;

    #[ORM\Column(nullable: true)]
    private ?float $latitude = null;

    #[ORM\Column(nullable: true)]
    private ?float $longitude = null;

    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
    }

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
    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImageFile($image)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        // if ($image) {
        // if 'updatedAt' is not defined in your entity, use another property
        // $this->updatedAt = new DateTime('now');
        //}
    }
    /**
     * @return Collection<int, Vehicule>
     */
    public function getVehicules(): Collection
    {
        return $this->vehicules;
    }

    public function addVehicule(Vehicule $vehicule): self
    {
        if (!$this->vehicules->contains($vehicule)) {
            $this->vehicules->add($vehicule);
            $vehicule->setConstat($this);
        }

        return $this;
    }

    public function removeVehicule(Vehicule $vehicule): self
    {
        if ($this->vehicules->removeElement($vehicule)) {
            // set the owning side to null (unless already changed)
            if ($vehicule->getConstat() === $this) {
                $vehicule->setConstat(null);
            }
        }

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
