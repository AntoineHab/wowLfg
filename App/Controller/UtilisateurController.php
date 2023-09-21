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
}
    