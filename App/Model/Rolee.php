<?php
namespace App\Model;
use App\Utils\BddConnect;
class Rolee extends BddConnect{
    //Attributs
    private ?int $id_rolee;
    private ?string $nom_rolee;
    //constructeur
    //Getters et Setters
    public function getId():?int{
        return $this->id_rolee;
    }
    public function setId(?int $id){
        $this->id_rolee = $id;
    }
    public function getNom():?string{
        return $this->nom_rolee;
    }
    public function setNom(?string $nom){
        $this->nom_rolee = $nom;
    }

    //Méthodes
    public function getAllRolees(){
        try{
            $req = $this->connexion()->prepare('SELECT
            id_rolee, nom_rolee FROM rolee' );
            $req->execute();
            return $req->fetchAll(\PDO::FETCH_CLASS| \PDO::FETCH_PROPS_LATE, Rolee::class);
        }
        catch (\Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
    public function getRolee(){
        try{
            $rolee = $this->getId();
            $req = $this->connexion()->prepare('SELECT
            nom_rolee FROM rolee WHERE id_rolee = ?' );
            $req->bindParam(1, $rolee, \PDO::PARAM_STR);
            $req->execute();
            return $req->fetchAll(\PDO::FETCH_CLASS| \PDO::FETCH_PROPS_LATE, Rolee::class);
        }
        catch (\Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
}

?>