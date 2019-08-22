<?php
// Début de la SESSION
session_start();
// Inclusion de la classe "airforcetwo_manager.php"
require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/airforcetwo_manager.php');

// Vérification des accès a la page
if(empty($_COOKIE['id'])) {
    $erreur = new airforcetwo_manager();
    $erreur->setMessage('Vous ête déja déconnecté','index.php');
}else{
// Creation d'un nouvel objet "deco" de type "airforcetwo_manager"
$deco = new airforcetwo_manager();
// Execution de la fonction deconnexion
$deco->deconnexion();
}
?>
