<?php
namespace App\Model;
use App\Utils\BddConnect;
class Role extends BddConnect{
    //Attributs
    private ?int $id_role;
    private ?string $nom_role;
    //constructeur
    //Getters et Setters
    public function getId():?int{
        return $this->id_role;
    }
    public function setId(?int $id){
        $this->id_role = $id;
    }
    public function getNom():?string{
        return $this->nom_role;
    }
    public function setNom(?string $nom){
        $this->nom_role = $nom;
    }

    //Méthodes
    public function getAllRoles(){
        try{
            $req = $this->connexion()->prepare('SELECT
            id_rolee, nom_rolee FROM rolee' );
            $req->execute();
            return $req->fetchAll(\PDO::FETCH_CLASS| \PDO::FETCH_PROPS_LATE, Role::class);
        }
        catch (\Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
}

?>