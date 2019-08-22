<?php
// Début de la SESSION
session_start();
// Inclusion de la classe "reservation_manager.php" et "reservation.php"
require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/reservation_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/reservation.php');

if(isset($_GET['id_vol'])) {
  // Creation d'un nouvel objet "reservation" de type "reservation_manager"
    $reservation = new reservation_manager();
    // Execution de la fonction "reservation" avec l'envoie des données de ($_GET['id_vol'])
    $reservation->deleteReserv($_GET['id_vol']);
}
