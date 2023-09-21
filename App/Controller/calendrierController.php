<?php
namespace App\Controller;
use App\Model\Utilisateur;
use App\vue\Template;

class CalendrierController {

    public function getCalendar(){
        $error="";
        Template::render('header.php', 'Calendrier', 'vueCalendrier.php', 'footer.php', 
        $error, ['script.js', 'main.js'], ['styles.css', 'main.css']);

    }
}

?>