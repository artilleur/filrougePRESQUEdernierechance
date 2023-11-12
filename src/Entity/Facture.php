<?php

namespace App\Entity;

use App\Entity\Commande;
use App\Entity\Utilisateur;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\FactureRepository;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

     #[ORM\Column]
     private ?int $fact_id = null;

     #[ORM\ManyToOne(inversedBy: 'factures')]
     private ?Utilisateur $cli_nom = null;

     #[ORM\ManyToOne(inversedBy: 'factures')]
     private ?Utilisateur $cli_prenom = null;

     #[ORM\ManyToOne(inversedBy: 'factures')]
     private ?Utilisateur $cli_adresse = null;

     #[ORM\ManyToOne(inversedBy: 'factures')]
     private ?Utilisateur $cli_cp = null;

     #[ORM\ManyToOne(inversedBy: 'factures')]
     private ?Utilisateur $cli_ville = null;

     #[ORM\ManyToOne(inversedBy: 'factures')]
     private ?Utilisateur $cli_telephone = null;

     #[ORM\ManyToOne(inversedBy: 'factures')]
     private ?Commande $adresse1 = null;

     #[ORM\ManyToOne(inversedBy: 'factures')]
     private ?Commande $adresse2 = null;

     #[ORM\ManyToOne(inversedBy: 'factures')]
     private ?CommandeDetail $pro_prix = null;

     #[ORM\ManyToOne(inversedBy: 'factures')]
     private ?CommandeDetail $pro_quantite = null;

     public function getNom(): ?Utilisateur
     {
         return $this->cli_nom;
     }

     public function setCliNom(?Utilisateur $cli_nom): static
     {
         $this->cli_nom = $cli_nom;

         return $this;
     }

     public function getCliPrenom(): ?Utilisateur
     {
         return $this->cli_prenom;
     }

     public function setCliPrenom(?Utilisateur $cli_prenom): static
     {
         $this->cli_prenom = $cli_prenom;

         return $this;
     }

     public function getCliAdresse(): ?Utilisateur
     {
         return $this->cli_adresse;
     }

     public function setCliAdresse(?Utilisateur $cli_adresse): static
     {
         $this->cli_adresse = $cli_adresse;

         return $this;
     }

     public function getCliCp(): ?Utilisateur
     {
         return $this->cli_cp;
     }

     public function setCliCp(?Utilisateur $cli_cp): static
     {
         $this->cli_cp = $cli_cp;

         return $this;
     }

     public function getCliVille(): ?Utilisateur
     {
         return $this->cli_ville;
     }

     public function setCliVille(?Utilisateur $cli_ville): static
     {
         $this->cli_ville = $cli_ville;

         return $this;
     }

     public function getCliTelephone(): ?Utilisateur
     {
         return $this->cli_telephone;
     }

     public function setCliTelephone(?Utilisateur $cli_telephone): static
     {
         $this->cli_telephone = $cli_telephone;

         return $this;
     }

     public function getAdresse1(): ?Commande
     {
         return $this->adresse1;
     }

     public function setAdresse1(?Commande $adresse1): static
     {
         $this->adresse1 = $adresse1;

         return $this;
     }

     public function getAdresse2(): ?Commande
     {
         return $this->adresse2;
     }

     public function setAdresse2(?Commande $adresse2): static
     {
         $this->adresse2 = $adresse2;

         return $this;
     }

     public function getPrix(): ?CommandeDetail
     {
         return $this->pro_prix;
     }

     public function setProPrix(?CommandeDetail $pro_prix): static
     {
         $this->pro_prix = $pro_prix;

         return $this;
     }

     public function getQuantite(): ?CommandeDetail
     {
         return $this->pro_quantite;
     }

     public function setProQuantite(?CommandeDetail $pro_quantite): static
     {
         $this->pro_quantite = $pro_quantite;

         return $this;
     }
}

    