<?php
// Début de la SESSION
session_start();
// Inclusion de la classe "achat_manager.php" et "achat_manager"
require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/achat_manager.php');
require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/achat.php');

if(isset($_GET['id_vol'])) {
  // Creation d'un nouvel objet "donnees" de type "achat" avec l'envoie de "num_carte", "expi" et "codesecu"
  $donnees= new achat([

      'num_carte' => $_POST['num_carte'],
      'expi' => $_POST['expi'],
      'codesecu' => $_POST['codesecu']]);

      // Creation d'un nouvel objet "achat" de type "achat_manager"
      $achat = new achat_manager();
      // Execution de la fonction "achat" avec l'envoie des données de ($donnees)
      $achat->addAchat($donnees);
      echo var_dump($donnees);


}
?>
