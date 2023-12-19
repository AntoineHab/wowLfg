<?php
namespace App\Controller;
use App\Model\Personnage;
use App\Model\Rolee;
use App\Model\Classe;
use App\Model\Utilisateur;
use App\vue\Template;
use App\Utils\Utilitaire;

Class PersonnageController extends Personnage {
    public function addPersonnage(){
        $tab=$this->findAll();
        $roleeTab = (new Rolee)->getAllRolees();
        $classeTab = (new Classe)->getAllClasses();
        // $classeTab = $classe;
        $error = "";
        //tester si le formulaire
        if(isset($_POST['submit'])){
            //test si les champs sont remplis
            if(!empty($_POST['nom_personnage'])
            AND !empty($_POST['serveur_personnage']) AND !empty($_POST['id_classe_personnage']) 
            AND !empty($_POST['id_rolee_personnage']) AND !empty($_POST['rio_personnage'])){   
                    //setter les valeurs à l'objet personnageController
                    $this->setNom(Utilitaire::cleanInput($_POST['nom_personnage']));
                    $this->setServeur(Utilitaire::cleanInput($_POST['serveur_personnage']));
                    $this->setClasse(Utilitaire::cleanInput($_POST['id_classe_personnage']));
                    $this->setRole(Utilitaire::cleanInput($_POST['id_rolee_personnage']));
                    $this->setRio(Utilitaire::cleanInput($_POST['rio_personnage']));
                    //tester si le personnage existe
                    if(!$this->findOneBy()){
                        //Ajouter le personage en BDD
                        $this->add();
                        $error = "Le personnage a été ajouté !";
                        header("refresh:1;url=./moncompte");
                    }    
                    else{
                        $error = "Le personnage existe déja";
                    }              
            }else{
                $error = "Veuillez renseigner tous les champs du formulaire";
            }
        }
        Template::render('header.php', 'Mon Compte', 'vueMonCompte.php', 'footer.php', 
        $error, ['script.js', 'main.js'], ['styles.css', 'main.css'], $tab, $classeTab, $roleeTab);
    }
    public function supprimerPersonnage(){
        $error = "";
        //tester si le paramètre existe
        if(isset($_GET['nom']) AND isset($_GET['serveur'])){
            //tester si le paramètre $_GET[''] est rempli
            if(!empty(($_GET['nom']))AND !empty($_GET['serveur'])){
                //setter la valeur de $_GET[''] à l'attribut
                $this->setNom(Utilitaire::cleanInput($_GET['nom']));
                $this->setServeur(Utilitaire::cleanInput($_GET['serveur']));
                //appeler la fonction findOneBy qui va retourner un objet (personnage) qui existe ou false
                if($this->findOneBy()){
                    $this->updateStatutPerso();
                    $error = 'le personnage '.$this->getNom().'a été supprimé';
                }
                //Test le personnage n'existe pas
                else{
                    $error = 'Aucun personnage trouvé';
                }
            }
            //tester si le paramètre $_GET['nom'] est vide
            else{
               $error = 'le personnage n\'est pas renseigné';
            }
        }
        //le paramètre $_GET['nom'] n'existe pas
        else{
            $error = 'le paramètre n\'existe pas';
        }
        Template::render('header.php', 'Supprimer', 'vueSupprimerPerso.php','', 
        $error, ['script.js', 'main.js'], ['styles.css', 'main.css']);
        header("refresh:2;url=./moncompte");
    }
}

?>