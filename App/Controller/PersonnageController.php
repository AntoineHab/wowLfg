<?php
namespace App\Controller;
use App\Model\Personnage;
use App\Model\Utilisateur;
use App\vue\Template;
use App\Utils\Utilitaire;

Class PersonnageController extends Personnage {
    public function addPersonnage(){
        // $tabNom = (new Utilisateur)->infoUser();
        $error = "";
        //tester si le formulaire
        if(isset($_POST['submit'])){
            //test si les champs sont remplis
            if(!empty($_POST['nom_personnage'])
            AND !empty($_POST['serveur_personnage']) AND !empty($_POST['classe_personnage']) 
            AND !empty($_POST['role_personnage']) AND !empty($_POST['rio_personnage'])){   
                    //setter les valeurs à l'objet UtilisateurController
                    $this->setNom(Utilitaire::cleanInput($_POST['nom_personnage']));
                    $this->setServeur(Utilitaire::cleanInput($_POST['serveur_personnage']));
                    $this->setClasse(Utilitaire::cleanInput($_POST['classe_personnage']));
                    $this->setRole(Utilitaire::cleanInput($_POST['role_personnage']));
                    $this->setRio(Utilitaire::cleanInput($_POST['rio_personnage']));
                    //tester si le compte existe
                    if(!$this->findOneBy()){
                        //Ajouter le personage en BDD
                        $this->add();
                        $error = "Le personnage a été ajouté !";
                    }    
                    else{
                        $error = "Le personnage existe déja";
                    }              
            }else{
                $error = "Veuillez renseigner tous les champs du formulaire";
            }
        }
        Template::render('header.php', 'Mon Compte', 'vueMonCompte.php', 'footer.php', 
        $error, ['script.js', 'main.js'], ['styles.css', 'main.css']);
    }
}