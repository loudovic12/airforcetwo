<?php
// Début de la SESSION
session_start();
// Inclusion des classes "airforcetwo_management.php" et "airforcetwo.php"
require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/airforcetwo_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/airforcetwo.php');

// Vérification pour savoir si le formulaire a bien été remplit
if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['phone']) || empty($_POST['adresse']) || empty($_POST['pays']) || empty($_POST['email']) || empty($_POST['mdp'])) {
    $erreur = new airforcetwo_manager();
    $erreur->setMessage('Formulaire incomplet','src/view/registration.php');
}
else {
// Creation d'un nouvel objet "user" de type "airforcetwo" avec l'envoie des données

    $fidelite = rand(1000000, 9999999);

    $user = new airforcetwo([
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'phone' => $_POST['phone'],
        'adresse' => $_POST['adresse'],
        'pays' => $_POST['pays'],
        'email' => $_POST['email'],
        'mdp' => $_POST['mdp'],
        'fidelite' => $fidelite

    ]);
// Creation d'un nouvel objet "add" de type "airforcetwo_management"
    $add = new airforcetwo_manager();
// Execution de la fonction addUser avec l'envoie des données de ($user)
    $add->addUser($user);
}
