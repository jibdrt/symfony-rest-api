<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AuthorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuthorRepository::class)]
#[ApiResource]
class Author
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $personaldescription;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $picture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPersonaldescription(): ?string
    {
        return $this->personaldescription;
    }

    public function setPersonaldescription(?string $personaldescription): self
    {
        $this->personaldescription = $personaldescription;

        return $this;
    }

    public function getPicture(): ?bool
    {
        return $this->picture;
    }

    public function setPicture(?bool $picture): self
    {
        $this->picture = $picture;

        return $this;
    }
}
