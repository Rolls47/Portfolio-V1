<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormationRepository::class)
 */
class Formation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $school;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $degree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $field_of_study;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year_of_start;

    /**
     * @ORM\Column(type="integer")
     */
    private $year_of_end;

    /**
     * @ORM\Column(type="text")
     */
    private $logo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSchool(): ?string
    {
        return $this->school;
    }

    public function setSchool(string $school): self
    {
        $this->school = $school;

        return $this;
    }

    public function getDegree(): ?string
    {
        return $this->degree;
    }

    public function setDegree(string $degree): self
    {
        $this->degree = $degree;

        return $this;
    }

    public function getFieldOfStudy(): ?string
    {
        return $this->field_of_study;
    }

    public function setFieldOfStudy(string $field_of_study): self
    {
        $this->field_of_study = $field_of_study;

        return $this;
    }

    public function getYearOfStart(): ?int
    {
        return $this->year_of_start;
    }

    public function setYearOfStart(?int $year_of_start): self
    {
        $this->year_of_start = $year_of_start;

        return $this;
    }

    public function getYearOfEnd(): ?int
    {
        return $this->year_of_end;
    }

    public function setYearOfEnd(int $year_of_end): self
    {
        $this->year_of_end = $year_of_end;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }
}
