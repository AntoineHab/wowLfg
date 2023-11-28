<?php
namespace App\Controller;
use App\Model\Utilisateur;
use App\vue\Template;
use App\Utils\Utilitaire;

class UtilisateurController extends Utilisateur{
    public function addUser(){
        $error = "";
        //tester si le formulaire
        if(isset($_POST['submit'])){
            //test si les champs sont remplis
            if(!empty($_POST['nom_utilisateur'])
            AND !empty($_POST['mail_utilisateur']) AND !empty($_POST['password_utilisateur']) 
            AND !empty($_POST['repeat_password_utilisateur'])){
                //Test si les mots de passe correspondent
                if($_POST['password_utilisateur']==$_POST['repeat_password_utilisateur']){
                    //setter les valeurs à l'objet UtilisateurController
                    $this->setNom(Utilitaire::cleanInput($_POST['nom_utilisateur']));
                    $this->setMail(Utilitaire::cleanInput($_POST['mail_utilisateur']));
                    //tester si le compte existe
                    if(!$this->findOneBy()){
                        $this->setStatut(false);
                        //hashser le mot de passe
                        $this->setPassword(password_hash(Utilitaire::cleanInput($_POST['password_utilisateur']), PASSWORD_DEFAULT));
                        //Ajouter le compte en BDD
                        $this->add();
                        $error = "Le compte a été ajouté en BDD";
                    }    
                    else{
                        $error = "Le compte existe déja";
                    }
                }else{
                    $error = "Les mots de passe ne correspondent pas";
                }
            }else{
                $error = "Veuillez renseigner tous les champs du formulaire";
            }
        }
        Template::render('header.php', 'Inscription', 'vueInscriptionUser.php', 'footer.php', 
        $error, ['script.js', 'main.js'], ['styles.css', 'main.css']);
    }
    public function connexionUser(){   
        $error ="";
        //tester si le formulaire est submit
        if(isset($_POST['submit'])){
            //tester si les champs sont remplis
            if(!empty($_POST['mail_utilisateur']) AND !empty($_POST['password_utilisateur'])){
                //tester si le compte existe (findOneBy du model)
                $this->setMail(Utilitaire::cleanInput($_POST['mail_utilisateur']));
                $user = $this->findOneBy();
                if($user){
                        //tester si le mot de passe correspond (password_verify)
                        if(password_verify(Utilitaire::cleanInput($_POST['password_utilisateur']), $user->getPassword())){
                            $error = "Vous êtes connecté";
                            $_SESSION['connected'] = true;
                            $_SESSION['id'] = $user->getId();
                            $_SESSION['nom'] = $user->getNom();
                        }else {
                            $error = "Les informations de connexion ne sont pas valides";
                        }
                //test le compte n'existe pas
                }else{
                    $error = "Les informations de connexion ne sont pas valides";
                }
            //Test les champs sont vides
            }else{
                $error = "Veuillez renseigner tous les champs du formulaire";
            }header("refresh:1;url=./moncompte");
        }
        
        Template::render('header.php', 'Connexion', 'vueConnexionUser.php', 'footer.php', 
        $error, ['script.js', 'main.js'], ['styles.css', 'main.css']);
    }
    public function deconnexionUser(){
        unset($_COOKIE['PHPSESSID']);
        session_destroy();
        header('Location: ./');
    }
}
    