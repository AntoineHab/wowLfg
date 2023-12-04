<?php
namespace App\Model;
use App\Utils\BddConnect;
class Classe extends BddConnect{
    //Attributs
    private ?int $id_classe;
    private ?string $nom_classe;
    //constructeur
    //Getters et Setters
    public function getId():?int{
        return $this->id_classe;
    }
    public function setId(?int $id){
        $this->id_classe = $id;
    }
    public function getNom():?string{
        return $this->nom_classe;
    }
    public function setNom(?string $nom){
        $this->nom_classe = $nom;
    }

    //Méthodes
    public function getAllClasses(){
        try{
            $req = $this->connexion()->prepare('SELECT
            id_classe, nom_classe FROM classe' );
            $req->execute();
            return $req->fetchAll(\PDO::FETCH_CLASS| \PDO::FETCH_PROPS_LATE, Classe::class);
        }
        catch (\Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
  
}

?>