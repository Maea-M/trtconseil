<?php

namespace App\Entity;

use App\Repository\AnnoucementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnnoucementRepository::class)]
class Annoucement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    private ?string $entiteld = null;

    #[ORM\Column(length: 60)]
    private ?string $workplace = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntiteld(): ?string
    {
        return $this->entiteld;
    }

    public function setEntiteld(string $entiteld): self
    {
        $this->entiteld = $entiteld;

        return $this;
    }

    public function getWorkplace(): ?string
    {
        return $this->workplace;
    }

    public function setWorkplace(string $workplace): self
    {
        $this->workplace = $workplace;

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
}
