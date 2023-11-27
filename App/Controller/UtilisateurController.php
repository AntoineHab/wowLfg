<?php
namespace App\Controller;
use App\Model\Utilisateur;
use App\vue\Template;
use App\Utils\Utilitaire;
class UtilisateurController extends Utilisateur{
    public function connexionUser(){   
        $error ="";
        Template::render('header.php', 'Connexion', 'vueConnexionUser.php', 'footer.php', 
        $error, ['script.js', 'main.js'], ['styles.css', 'main.css']);
    }
    public function addUser(){
        $error = "";
        //tester si le formulaire
        if(isset($_POST['submit'])){
            //test si les champs sont remplis
            if(!empty($_POST['nom_utilisateur'])
            AND !empty($_POST['mail_utilisateur']) AND !empty($_POST['password_utilisateur']) 
            AND !empty($_POST['repeat_password_utilisateur'])){
                var_dump($_POST);
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
                        //créer les variables 
                        // $destinataire =$this->getMail();
                        // $objet = 'Cliquez utiliser le site';
                        // $contenu = '<p>clic en dessous pour accéder au site</p>
                        // <a href="http://localhost/mvc/useractivate?mail='.$this->getMail().'
                        // ">activer le compte</a>';
                        //Ajouter le compte en BDD
                        $this->add();
                        // Messagerie::sendEmail($destinataire, $objet, $contenu);
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
}
    