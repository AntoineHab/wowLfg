<?php
namespace App\Controller;
use App\Model\Utilisateur;
use App\vue\Template;

class CalendrierController {

    public function getCalendar(){
        $error="";
        Template::render('header.php', 'Calendrier', 'vueCalendrier.php', 'footer.php', 
        $error, ['calendrier.js'], ['styles.css']);

    }
    public function getDayEvent(){
        
    }
    public function addCalendar(){

        //WORK IN PROGRESS
    }
    
}

?>