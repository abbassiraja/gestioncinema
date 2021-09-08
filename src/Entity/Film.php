<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FilmRepository::class)
 */
class Film
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_categorie;

    /**
     * @ORM\ManyToOne(targetEntity=Admin::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_admin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_de_film;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Realisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $discription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $audience;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix_film;

    /**
     * @ORM\Column(type="time")
     */
    private $dure_film;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCategorie(): ?Categorie
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(?Categorie $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    public function getIdAdmin(): ?Admin
    {
        return $this->id_admin;
    }

    public function setIdAdmin(?Admin $id_admin): self
    {
        $this->id_admin = $id_admin;

        return $this;
    }

    public function getNomDeFilm(): ?string
    {
        return $this->nom_de_film;
    }

    public function setNomDeFilm(string $nom_de_film): self
    {
        $this->nom_de_film = $nom_de_film;

        return $this;
    }

    public function getRealisateur(): ?string
    {
        return $this->Realisateur;
    }

    public function setRealisateur(string $Realisateur): self
    {
        $this->Realisateur = $Realisateur;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDiscription(): ?string
    {
        return $this->discription;
    }

    public function setDiscription(string $discription): self
    {
        $this->discription = $discription;

        return $this;
    }

    public function getAudience(): ?string
    {
        return $this->audience;
    }

    public function setAudience(string $audience): self
    {
        $this->audience = $audience;

        return $this;
    }

    public function getPrixFilm(): ?int
    {
        return $this->prix_film;
    }

    public function setPrixFilm(int $prix_film): self
    {
        $this->prix_film = $prix_film;

        return $this;
    }

    public function getDureFilm(): ?\DateTimeInterface
    {
        return $this->dure_film;
    }

    public function setDureFilm(\DateTimeInterface $dure_film): self
    {
        $this->dure_film = $dure_film;

        return $this;
    }
}
