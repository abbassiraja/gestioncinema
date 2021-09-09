<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Film::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_film;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_user;

    /**
     * @ORM\OneToOne(targetEntity=Cinema::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_cinema;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_ticket;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFilm(): ?Film
    {
        return $this->id_film;
    }

    public function setIdFilm(?Film $id_film): self
    {
        $this->id_film = $id_film;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdCinema(): ?Cinema
    {
        return $this->id_cinema;
    }

    public function setIdCinema(Cinema $id_cinema): self
    {
        $this->id_cinema = $id_cinema;

        return $this;
    }

    public function getNombreDeTicket(): ?int
    {
        return $this->nombre_de_ticket;
    }

    public function setNombreDeTicket(int $nombre_de_ticket): self
    {
        $this->nombre_de_ticket = $nombre_de_ticket;

        return $this;
    }
}
