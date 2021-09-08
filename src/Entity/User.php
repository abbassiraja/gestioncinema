<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Date_de_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo_de_profil;

    /**
     * @ORM\Column(type="integer")
     */
    private $point_de_fidilite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateDeNaissance(): ?string
    {
        return $this->Date_de_naissance;
    }

    public function setDateDeNaissance(string $Date_de_naissance): self
    {
        $this->Date_de_naissance = $Date_de_naissance;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPhotoDeProfil(): ?string
    {
        return $this->photo_de_profil;
    }

    public function setPhotoDeProfil(string $photo_de_profil): self
    {
        $this->photo_de_profil = $photo_de_profil;

        return $this;
    }

    public function getPointDeFidilite(): ?int
    {
        return $this->point_de_fidilite;
    }

    public function setPointDeFidilite(int $point_de_fidilite): self
    {
        $this->point_de_fidilite = $point_de_fidilite;

        return $this;
    }
}
