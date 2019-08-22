<?php
// Début de la SESSION
session_start();
// Inclusion de la classe "reservation_manager.php" et "reservation.php"
require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/reservation_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/reservation.php');
// Vérification des accès a la page
if(empty($_COOKIE['id'])) {
    $_SESSION['message'] = 'Veuillez vous connecter afin de réserver';
    header('location: /airforcetwo/src/view/login.php');
} elseif(isset($_GET['id_vol'])) {
  // Creation d'un nouvel objet "reservation" de type "reservation_manager"
    $reservation = new reservation_manager();
      // Execution de la fonction "reservation" avec l'envoie des données de ($_GET['id_vol'])
    $reservation->addReserv($_GET['id_vol']);
}
