<?php

namespace App\Entity;

use App\Repository\EnvoieDocumentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnvoieDocumentRepository::class)
 */
class EnvoieDocument
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
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $classe;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_impression;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $piece_joider;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDateImpression(): ?string
    {
        return $this->date_impression;
    }

    public function setDateImpression(string $date_impression): self
    {
        $this->date_impression = $date_impression;

        return $this;
    }

    public function getPieceJoider(): ?string
    {
        return $this->piece_joider;
    }

    public function setPieceJoider(string $piece_joider): self
    {
        $this->piece_joider = $piece_joider;

        return $this;
    }
}
