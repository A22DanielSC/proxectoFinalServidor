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
    private ?\DateTimeInterface $birth_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_start_company = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_end_company = null;

    #[ORM\Column(length: 80)]
    private ?string $position = null;

    #[ORM\Column]
    private ?int $salary = null;

    #[ORM\Column]
    private ?bool $working = null;

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
        return $this->birth_date;
    }

    public function setBirthDate(\DateTimeInterface $birth_date): static
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    public function getDateStartCompany(): ?\DateTimeInterface
    {
        return $this->date_start_company;
    }

    public function setDateStartCompany(\DateTimeInterface $date_start_company): static
    {
        $this->date_start_company = $date_start_company;

        return $this;
    }

    public function getDateEndCompany(): ?\DateTimeInterface
    {
        return $this->date_end_company;
    }

    public function setDateEndCompany(?\DateTimeInterface $date_end_company): static
    {
        $this->date_end_company = $date_end_company;

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
