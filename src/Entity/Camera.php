<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CameraRepository")
 */
class Camera
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
    private $OwnerName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $OwnerFirstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $OwnerJob;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="integer")
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Brand;

    /**
     * @ORM\Column(type="integer")
     */
    private $Prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOwnerName(): ?string
    {
        return $this->OwnerName;
    }

    public function setOwnerName(string $OwnerName): self
    {
        $this->OwnerName = $OwnerName;

        return $this;
    }

    public function getOwnerFirstname(): ?string
    {
        return $this->OwnerFirstname;
    }

    public function setOwnerFirstname(string $OwnerFirstname): self
    {
        $this->OwnerFirstname = $OwnerFirstname;

        return $this;
    }

    public function getOwnerJob(): ?string
    {
        return $this->OwnerJob;
    }

    public function setOwnerJob(string $OwnerJob): self
    {
        $this->OwnerJob = $OwnerJob;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->Telephone;
    }

    public function setTelephone(int $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->Brand;
    }

    public function setBrand(string $Brand): self
    {
        $this->Brand = $Brand;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }
}
