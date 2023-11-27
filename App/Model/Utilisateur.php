<?php
namespace App\Model;
use App\Utils\BddConnect;
class Utilisateur extends BddConnect{
    //attributs
    private ?int $id_utilisateur;
    private ?string $nom_utilisateur;
    private ?string $prenom_utilisateur;
    private ?string $mail_utilisateur;
    private ?string $password_utilisateur;
    private ?string $image_utilisateur;
    private bool $statut_utilisateur;
    private Roles $roles;
    //constructeur

    //Getters et Setters
    public function getId():?int{
        return $this->id_utilisateur;
    }
    public function setId(?int $id){
        $this->id_utilisateur = $id;
    }
    public function getNom():?string{
        return $this->nom_utilisateur;
    }
    public function setNom(?string $nom){
        $this->nom_utilisateur = $nom;
    }
    public function getMail():?string{
        return $this->mail_utilisateur;
    }
    public function setMail(?string $mail){
        $this->mail_utilisateur = $mail;
    }
    public function getPassword():?string{
        return $this->password_utilisateur;
    }
    public function setPassword(?string $password){
        $this->password_utilisateur = $password;
    }
    public function getStatut():?bool{
        return $this->statut_utilisateur;
    }
    public function setStatut(?bool $statut){
        $this->statut_utilisateur = $statut;
    }
    //Méthodes
    
}
?> 