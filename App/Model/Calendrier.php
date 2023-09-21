<?php 
namespace App\Model;
use App\Utils\BddConnect;
use App\Utils\Utilitaire;

class Event extends BddConnect {

    //Attributs 
    private ?int $id_event;
    private ?string $nom_event;
    
    //Getters et Setters
    public function getId():?int{
        return $this->id_event;
    }
    public function setId(?int $id){
        $this->id_event = $id;
    }
    public function getNom():?string{
        return $this->nom_event;
    }
    public function setNom(?string $nom){
        $this->nom_event = $nom;
    }
}
?>