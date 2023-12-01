<?php
namespace App\Model;
use App\Utils\BddConnect;
class Personnage extends BddConnect{
    //attributs
    private int $id;
    private ?string $nom_personnage;
    private ?string $serveur_personnage;
    private ?string $classe_personnage;
    private ?string $role_personnage;
    private ?string $rio;
    //constructeur

    //Getters et Setters
    public function getId():?int{
        return $this->id_personnage;
    }
    public function setId(?int $id){
        $this->id_personnage = $id;
    }
    public function getNom():?string{
        return $this->nom_personnage;
    }
    public function setNom(?string $nom){
        $this->nom_personnage = $nom;
    }
    public function getServeur():?string{
        return $this->serveur_personnage;
    }
    public function setServeur(?string $serveur){
        $this->serveur_personnage = $serveur;
    }
    public function getClasse():?string{
        return $this->classe_personnage;
    }
    public function setClasse(?string $classe){
        $this->classe_personnage = $classe;
    }
    public function getRole():?string{
        return $this->role_personnage;
    }
    public function setRole(?string $role){
        $this->role_personnage = $role;
    }
    public function getRio():?string{
        return $this->rio_personnage;
    }
    public function setRio(?string $rio){
        $this->rio_personnage = $rio;
    }

    //Méthodes

    public function add(){
        try {
            //récupérer les données de l'objet
            $nom = $this->nom_personnage;
            $classe = $this->classe_personnage;
            $serveur = $this->serveur_personnage;
            $role = $this->role_personnage;
            $rio = $this->rio_personnage;
            $user = $_SESSION['id'];
            $req = $this->connexion()->prepare(
                "INSERT INTO personnage(nom_personnage, 
                serveur_personnage, classe_personnage, role_personnage, rio_personnage, id_utilisateur,statut_personnage) VALUES(?,?,?,?,?,?,1)");
            $req->bindParam(1, $nom, \PDO::PARAM_STR);
            $req->bindParam(2, $serveur, \PDO::PARAM_STR);
            $req->bindParam(3, $classe, \PDO::PARAM_STR);
            $req->bindParam(4, $role, \PDO::PARAM_STR);
            $req->bindParam(5, $rio, \PDO::PARAM_STR);
            $req->bindParam(6, $user, \PDO::PARAM_INT);
            $req->execute();
        } catch (\Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
    public function updateStatutPerso(){
        try {
            $user = $_SESSION['id'];
            $nom= $this->getNom();
            $serveur=$this->getServeur();
            $req = $this->connexion()->prepare('UPDATE personnage SET 
            statut_personnage = 0 WHERE nom_personnage = ? AND serveur_personnage = ? AND id_utilisateur = ?');
            $req->bindParam(1, $nom, \PDO::PARAM_STR);
            $req->bindParam(2, $serveur, \PDO::PARAM_STR);
            $req->bindParam(3, $user, \PDO::PARAM_INT);
            $req->execute();
        } 
        catch (\Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
   
    public function findOneBy(){
        try {
            //récupérer les données de l'objet
            $nom = $this->nom_personnage;
            $serveur = $this->serveur_personnage;
            $req = $this->connexion()->prepare(
                "SELECT id_personnage, nom_personnage,
                serveur_personnage, classe_personnage
                FROM personnage WHERE nom_personnage = ? and serveur_personnage = ? and statut_personnage = 1");
            $req->bindParam(1, $nom, \PDO::PARAM_STR);
            $req->bindParam(2, $serveur, \PDO::PARAM_STR);
            $req->setFetchMode(\PDO::FETCH_CLASS| \PDO::FETCH_PROPS_LATE, Personnage::class);
            $req->execute();
            return $req->fetch();
        } catch (\Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
    public function findAll(){
        try {
            $user = $_SESSION['id'];
            $req = $this->connexion()->prepare('SELECT 
            id_personnage, nom_personnage, role_personnage, serveur_personnage, classe_personnage, rio_personnage
            FROM personnage WHERE id_utilisateur = ? AND statut_personnage = 1');
            $req->bindParam(1, $user, \PDO::PARAM_INT);
            $req->execute();
            return $req->fetchAll(\PDO::FETCH_CLASS| \PDO::FETCH_PROPS_LATE, Personnage::class);
        } catch (\Exception $e) {
            die('Error : '.$e->getMessage());
        }
    }
}
