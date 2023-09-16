<?php 
require_once './autoload.php';

//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);
//test si l'url posséde une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';
//routeur
switch ($path) {
    case '/wowLfg/':
        include './home.php';
        break;
    case '/wowLfg/connexion':
        break;
    case '/wowLfg/calendrier':
        include './App/Vue/calendrier.php';
        break;
    default:
        include './error.php';
        break;
}




?>