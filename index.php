<?php 
require_once './autoload.php';
use App\Controller\EventsController;
use App\Controller\HomeController;
use App\Controller\UtilisateurController;
$userController= new UtilisateurController();
$homeController= new HomeController();
$eventController=new EventsController();
//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);
//test si l'url posséde une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';
//routeur

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

?>