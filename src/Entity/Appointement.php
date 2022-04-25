<?php

namespace App\Entity;

use App\Repository\AppointementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AppointementRepository::class)]
class Appointement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $mydate;

    #[ORM\Column(type: 'string', length: 100)]
    private $titre;

    #[ORM\Column(type: 'string', length: 100)]
    private $email;

    // #[ORM\Column(type: 'integer')]
    #[ORM\Column(type: 'string', length: 14)]
    private $telephone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMydate(): ?\DateTimeInterface
    {
        return $this->mydate;
    }

    public function setMydate(\DateTimeInterface $mydate): self
    {
        $this->mydate = $mydate;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }
}
