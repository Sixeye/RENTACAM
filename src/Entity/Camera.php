<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank(message="Veuillez nous donner votre nom s'il vous plaît.")
     * @ORM\Column(type="string", length=255)
     */
    private $OwnerName;

    /**
     * @Assert\NotBlank(message="Veuillez nous donner votre prénom s'il vous plaît.")
     * @ORM\Column(type="string", length=255)
     */
    private $OwnerFirstname;

    /**
     * @Assert\NotBlank(message="Veuillez nous donner votre fonction s'il vous plaît.")
     * @ORM\Column(type="string", length=255)
     */
    private $OwnerJob;

    /**
     * @Assert\NotBlank(message="Veuillez nous donner votre email s'il vous plaît.")
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @Assert\NotBlank(message="Veuillez nous donner votre téléphone s'il vous plaît.")
     * @ORM\Column(type="integer")
     */
    private $Telephone;

    /**
     * @Assert\NotBlank(message="Veuillez nous donner le modèle de votre caméra s'il vous plaît.")
     * @ORM\Column(type="string", length=255)
     */
    private $Brand;

    /**
     * @Assert\NotBlank(message="Veuillez nous donner votre tarif de location / jour s'il vous plaît.")
     * @Assert\GreaterThan(value = 10, message="Le minimum est de 10.")
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
