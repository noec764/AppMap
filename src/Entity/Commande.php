<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="json")
     */
    private $achat = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAchat(): ?array
    {
        return $this->achat;
    }

    public function setAchat(array $achat): self
    {
        $this->achat = $achat;

        return $this;
    }
}
