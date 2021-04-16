<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepriseRepository::class)
 */
class Entreprise
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num_siret;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Produits::class, mappedBy="entreprise", orphanRemoval=true)
     */
    private $Stock;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="entreprises")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Administre;

    public function __construct()
    {
        $this->Stock = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEntreprise(): ?string
    {
        return $this->nom_entreprise;
    }

    public function setNomEntreprise(string $nom_entreprise): self
    {
        $this->nom_entreprise = $nom_entreprise;

        return $this;
    }

    public function getAdresseEntreprise(): ?string
    {
        return $this->adresse_entreprise;
    }

    public function setAdresseEntreprise(string $adresse_entreprise): self
    {
        $this->adresse_entreprise = $adresse_entreprise;

        return $this;
    }

    public function getNumSiret(): ?string
    {
        return $this->num_siret;
    }

    public function setNumSiret(string $num_siret): self
    {
        $this->num_siret = $num_siret;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Produits[]
     */
    public function getStock(): Collection
    {
        return $this->Stock;
    }

    public function addStock(Produits $stock): self
    {
        if (!$this->Stock->contains($stock)) {
            $this->Stock[] = $stock;
            $stock->setEntreprise($this);
        }

        return $this;
    }

    public function removeStock(Produits $stock): self
    {
        if ($this->Stock->removeElement($stock)) {
            // set the owning side to null (unless already changed)
            if ($stock->getEntreprise() === $this) {
                $stock->setEntreprise(null);
            }
        }

        return $this;
    }

    public function getAdministre(): ?User
    {
        return $this->Administre;
    }

    public function setAdministre(?User $Administre): self
    {
        $this->Administre = $Administre;

        return $this;
    }
}
