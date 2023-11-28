<?php 
require_once './autoload.php';
use App\Controller\EventsController;
use App\Controller\HomeController;
use App\Controller\UtilisateurController;
use App\Controller\PersonnageController;
$userController= new UtilisateurController();
$homeController= new HomeController();
$eventController=new EventsController();
$personnageController=new PersonnageController();
session_start();
//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);
//test si l'url posséde une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';
//routeur
if (isset($_SESSION['connected'])){
    switch ($path){
        case '/wowLfg/':
            $homeController->getHome();
       break;
       case '/wowLfg/deconnexion':
            $userController->deconnexionUser();
            break;
       case '/wowLfg/calendrier':
            $eventController->getEvents();
            break;
        case '/wowLfg/moncompte':
            $userController->infoUser();
            $personnageController->addPersonnage();
            break; 
       default:
           include './error.php';
           break; 
   }
}
else {
    switch ($path) {
        case '/wowLfg/':
            $homeController->getHome();
            break;
        case '/wowLfg/connexion':
            $userController->connexionUser();
            break;
        case '/wowLfg/inscription':
            $userController->addUser();
            break;    
        case '/wowLfg/calendrier':
            $eventController->getEvents();
            break;  
        default:
            include './error.php';
            break;
    }
    
}

?>