<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/connexionPDO.php');

class achat_manager{

public function __construct()
{

}
// Fonction permettant d'ajouter un achat
  public function addAchat($donnees){
      $pdo=new connexionpdo();
      $prepare = $pdo->pdo_start()->prepare("INSERT INTO achat (id_user,id_vol,num_carte,codesecu,expi) VALUES (?,?,?,?,?) ");
      $prepare->execute([
          $_COOKIE['id'],
          $_GET['id_vol'],
          $donnees->getNum_carte(),
            $donnees->getCodesecu(),
              $donnees->getExpi()]);


      $_SESSION['message'] = 'Achat effectué avec succès';
      header('location: /airforcetwo/src/view/achats.php');
  }

  // Fonction permettant de récupérer les données d'un achat
  public function listAchat() {
      $pdo=new connexionpdo();
      $prepare = $pdo->pdo_start()->prepare('SELECT * FROM vol INNER JOIN achat ON achat.id_vol=vol.id INNER JOIN inscription ON achat.id_user=inscription.id WHERE id_user=? GROUP BY id_vol ');
      $prepare->execute([
        $_COOKIE['id']
      ]);
      $result = $prepare->fetchAll();
      return $result;

  }
}
?>
