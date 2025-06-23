<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompanyRepository::class)]
class Company
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 20)]
    private ?string $siren = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $creationDate = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    // === Getters & Setters ===

    public function getId(): ?int { return $this->id; }

    public function getName(): ?string { return $this->name; }
    public function setName(string $name): self { $this->name = $name; return $this; }

    public function getSiren(): ?string { return $this->siren; }
    public function setSiren(string $siren): self { $this->siren = $siren; return $this; }

    public function getCreationDate(): ?\DateTimeInterface { return $this->creationDate; }
    public function setCreationDate(\DateTimeInterface $creationDate): self { $this->creationDate = $creationDate; return $this; }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): self { $this->status = $status; return $this; }
}
