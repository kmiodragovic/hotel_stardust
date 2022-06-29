<?php

namespace App\Entity;

use App\Repository\ReserverenRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReserverenRepository::class)]
class Reserveren
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $kamer_id;

    #[ORM\Column(type: 'text')]
    private $firstname;

    #[ORM\Column(type: 'text')]
    private $lastname;

    #[ORM\Column(type: 'text')]
    private $city;

    #[ORM\Column(type: 'text')]
    private $address;

    #[ORM\Column(type: 'text')]
    private $zipcode;

    #[ORM\Column(type: 'date')]
    private $inchecken;

    #[ORM\Column(type: 'date')]
    private $uitchecken;

    #[ORM\Column(type: 'text')]
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKamerId(): ?int
    {
        return $this->kamer_id;
    }

    public function setKamerId(int $kamer_id): self
    {
        $this->kamer_id = $kamer_id;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getInchecken(): ?\DateTimeInterface
    {
        return $this->inchecken;
    }

    public function setInchecken(\DateTimeInterface $inchecken): self
    {
        $this->inchecken = $inchecken;

        return $this;
    }

    public function getUitchecken(): ?\DateTimeInterface
    {
        return $this->uitchecken;
    }

    public function setUitchecken(\DateTimeInterface $uitchecken): self
    {
        $this->uitchecken = $uitchecken;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
