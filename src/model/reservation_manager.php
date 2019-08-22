<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/connexionPDO.php');

class reservation_manager{

public function __construct()
{

}
// Fonction permettant d'ajouter une réservation
  public function addReserv($donnees){
      $pdo=new connexionpdo();
      $prepare = $pdo->pdo_start()->prepare("INSERT INTO reservation (id_user,id_vol) VALUES (?,?) ");
      $prepare->execute([
          $_COOKIE['id'],
          $donnees
      ]);
      $_SESSION['message'] = 'Réservation effectuée avec succès';
      header('location: /airforcetwo/src/view/booking.php');
  }
// Fonction permettant de récupérer les données d'une réservation
  public function listReserv() {
      $pdo=new connexionpdo();
      $prepare = $pdo->pdo_start()->prepare('SELECT * FROM vol WHERE id IN (SELECT id_vol FROM reservation WHERE id_user=?)');
      $prepare->execute([
        $_COOKIE['id']
      ]);
      $result = $prepare->fetchAll();
      return $result;

  }

  // Fonction permettant de récupérer les données d'une réservation

  public function selectReserv($donnees) {
      $pdo=new connexionpdo();
      $prepare = $pdo->pdo_start()->prepare('SELECT * FROM vol INNER JOIN reservation ON reservation.id_vol=vol.id WHERE id_user=? AND id_vol=?');
      $prepare->execute([
        $_COOKIE['id'],
        $donnees
      ]);
      $m = $prepare->fetchAll();
      return $m;


  }
    // Fonction permettant de supprimer les données d'une réservation
  public function deleteReserv($donnees) {
      $pdo=new connexionpdo();
      $prepare = $pdo->pdo_start()->prepare("DELETE FROM reservation WHERE id_user=? AND id_vol=?");
      $prepare->execute([
        $_COOKIE['id'],
        $donnees
      ]);
      $_SESSION['message'] = 'Reservation annulée avec succès';
      header('location: /airforcetwo/src/view/booking.php');

  }





}
?>
