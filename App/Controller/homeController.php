<?php
namespace App\Controller;
use App\vue\Template;
class HomeController{
    public function getHome(){
        $error = "";
        Template::render('header.php', 'Accueil', 'vueHome.php', 'footer.php', 
        $error, ['script.js', 'main.js'], ['styles.css', 'main.css']);
    }
    public function get404(){
        $error = "";
        Template::render('header.php', 'Error 404', 'vueError.php', 'footer.php', 
        $error, ['script.js'], ['style.css']);
    }
    public function getNotConnected(){
        $error = "";
        Template::render('header.php', 'Vous n\'êtes pas connecté', 'vueNotConnected.php', 'footer.php', 
        $error, ['script.js'], ['styles.css', 'main.css']);
    }
}