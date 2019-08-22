<?php
// Début de la SESSION
session_start();
// Inclusion des classes "airforcetwo_management.php" et "airforcetwo.php"
require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/airforcetwo_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/airforcetwo.php');


// Vérification pour savoir si le formulaire a bien été remplit
if(empty($_POST['email']) || empty($_POST['mdp'])) {
    $erreur = new airforcetwo_manager();
    $erreur->setMessage('Formulaire incomplet','index.php');
}else{

// Creation d'un nouvel objet "user" de type "airforcetwo" avec l'envoie de "email" et "mdp"
$user = new airforcetwo([
    'email' => $_POST['email'],
    'mdp' => $_POST['mdp']
]);

// Creation d'un nouvel objet "login" de type "airforcetwo_manager"
$login = new airforcetwo_manager();
// Execution de la fonction login avec l'envoie des données de ($user)
$login->login($user);}
