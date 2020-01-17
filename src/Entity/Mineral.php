<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MineralRepository")
 */
class Mineral
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $continent;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Region;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Mine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Price;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Gps;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Purete;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContinent(): ?string
    {
        return $this->continent;
    }

    public function setContinent(string $continent): self
    {
        $this->continent = $continent;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->Region;
    }

    public function setRegion(?string $Region): self
    {
        $this->Region = $Region;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getMine(): ?string
    {
        return $this->Mine;
    }

    public function setMine(?string $Mine): self
    {
        $this->Mine = $Mine;

        return $this;
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

    public function getPrice(): ?int
    {
        return $this->Price;
    }

    public function setPrice(?int $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getGps(): ?string
    {
        return $this->Gps;
    }

    public function setGps(?string $Gps): self
    {
        $this->Gps = $Gps;

        return $this;
    }

    public function getPurete(): ?string
    {
        return $this->Purete;
    }

    public function setPurete(?string $Purete): self
    {
        $this->Purete = $Purete;

        return $this;
    }
}
