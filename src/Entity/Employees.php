<?php

namespace App\Entity;

use App\Repository\EmployeesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeesRepository::class)]
class Employees
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $name = null;

    #[ORM\Column(length: 9)]
    private ?string $dni = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $birthDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateStartCompany = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateEndCompany = null;

    #[ORM\Column(length: 80)]
    private ?string $position = null;

    #[ORM\Column]
    private ?int $salary = null;

    #[ORM\Column]
    private ?bool $working = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(string $dni): static
    {
        $this->dni = $dni;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeInterface $birthDate): static
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getDateStartCompany(): ?\DateTimeInterface
    {
        return $this->dateStartCompany;
    }

    public function setDateStartCompany(\DateTimeInterface $dateStartCompany): static
    {
        $this->dateStartCompany = $dateStartCompany;

        return $this;
    }

    public function getDateEndCompany(): ?\DateTimeInterface
    {
        return $this->dateEndCompany;
    }

    public function setDateEndCompany(?\DateTimeInterface $dateEndCompany): static
    {
        $this->dateEndCompany = $dateEndCompany;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function getSalary(): ?int
    {
        return $this->salary;
    }

    public function setSalary(int $salary): static
    {
        $this->salary = $salary;

        return $this;
    }

    public function isWorking(): ?bool
    {
        return $this->working;
    }

    public function setWorking(bool $working): static
    {
        $this->working = $working;

        return $this;
    }
}
