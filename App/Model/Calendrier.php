<?php 
namespace App\Model;
use App\Utils\BddConnect;
use App\Utils\Utilitaire;

class Event extends BddConnect {

    //Attributs 
    private ?int $id_event;
    private ?string $nom_event;
    private ?string $description_event;
    private ?string $date_event;
    private ?string $heure_event;
    private ?int $id_utilisateur;
    private ?int $id_raid;
    
    //Getters et Setters
    public function getIdEvent():?int{
        return $this->id_event;
    }
    public function setIdEvent(?int $id_event){
        $this->id_event = $id_event;
    }
    public function getNom():?string{
        return $this->nom_event;
    }
    public function setNom(?string $nom){
        $this->nom_event = $nom;
    }
    public function getDescription():?string{
        return $this->description_event;
    }
    public function setDescription(?string $description_event){
        $this->description_event = $description_event;
    }
    public function getDate():?string{
        return $this->date_event;
    }
    public function setDate(?string $date_event){
        $this->date_event = $date_event;
    }
    public function getHeure():?string{
        return $this->heure_event;
    }
    public function setHeure(?string $heure_event){
        $this->heure_event = $heure_event;
    }
    public function getIdUtilisateur():?int{
        return $this->id_utilisateur;
    }
    public function setIdUtilisateur(?int $id_utilisateur){
        $this->id_utilisateur = $id_utilisateur;
    }
    public function getIdRaid():?int{
        return $this->id_raid;
    }
    public function setIdRaid(?int $id_raid){
        $this->id_raid = $id_raid;
    }

    //Methodes

    public function add(){
        try {
            $nom = $this->nom_event;
            $description = $this->description_event;
            $date = $this->date_event;
            $heure = $this->heure_event;
            $id_auteur = $this->id_utilisateur;
            $id_raid = $this->id_raid;
            $req = $this->connexion()->prepare(
                "INSERT INTO evente(nom_evente, 
                description_evente, date_evente, heure_evente, id_raid, id_utilisateur) VALUES(?,?,?,?,?,?)");
            $req->bindParam(1, $nom, \PDO::PARAM_STR);
            $req->bindParam(2, $description, \PDO::PARAM_STR);
            $req->bindParam(3, $date, \PDO::PARAM_STR);
            $req->bindParam(4, $heure, \PDO::PARAM_STR);
            $req->bindParam(5, $id_raid, \PDO::PARAM_INT);
            $req->bindParam(6, $id_auteur, \PDO::PARAM_INT);
            $req->execute();
        } catch (\Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
}

?>