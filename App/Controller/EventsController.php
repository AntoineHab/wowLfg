<?php
namespace App\Controller;
use App\Model\Utilisateur;
use App\vue\Template;

class EventsController {

    public function getEvents(){
        $error="";
        Template::render('header.php', 'Calendrier', 'vueCalendrier.php', 'footer.php', 
        $error, ['calendrier.js'], ['styles.css']);

    }
    public function getDayEvent(){
        
    }
    public function addEvent(){

        $error="";
        Template::render('header.php', 'Ajouter un Event', 'vueCalendrier.php', 'footer.php', 
        $error, ['calendrier.js'], ['styles.css']);
    }
    
}

?>