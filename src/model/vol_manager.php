<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/connexionPDO.php');

class vol_manager{

public function __construct()
{

}

public function listeVol(vol $donnees){
    $pdo=new connexionpdo();
    if(null != $donnees->getVille_dep() && null != $donnees->getVille_arr()) {
        $prepare = $pdo->pdo_start()->prepare("SELECT * FROM vol WHERE ville_dep = ? and ville_arr = ?");
        $prepare->execute([
            $donnees->getVille_dep(),
            $donnees->getVille_arr()
        ]);
        $result = $prepare->fetchAll();
        return $result;

    } elseif(null != $donnees->getVille_dep() && null != $donnees->getDate_dep()){
        $prepare = $pdo->pdo_start()->prepare("SELECT * FROM vol WHERE ville_dep = ? AND date_dep = ?");
        $prepare->execute([
            $donnees->getVille_dep(),
            $donnees->getDate_dep()
        ]);
        $result = $prepare->fetchAll();
        return $result;

    } elseif(null != $donnees->getVille_arr() && null != $donnees->getDate_dep()) {
        $prepare = $pdo->pdo_start()->prepare("SELECT * FROM vol WHERE ville_arr = ? AND date_dep = ?");
        $prepare->execute([
            $donnees->getVille_arr(),
            $donnees->getDate_dep()
        ]);
        $result = $prepare->fetchAll();
        return $result;

    } elseif(null != $donnees->getVille_dep()) {
        $prepare = $pdo->pdo_start()->prepare("SELECT * FROM vol WHERE ville_dep=?");
        $prepare->execute([
            $donnees->getVille_dep()
        ]);
        $result = $prepare->fetchAll();
        return $result;

    } elseif(null != $donnees->getVille_arr()){
        $prepare = $pdo->pdo_start()->prepare("SELECT * FROM vol WHERE ville_arr=?");
        $prepare->execute([
            $donnees->getVille_arr()
        ]);
        $result = $prepare->fetchAll();
        return $result;

    } elseif(null != $donnees->getDate_dep()){
        $prepare = $pdo->pdo_start()->prepare("SELECT * FROM vol WHERE date_dep=?");
        $prepare->execute([
            $donnees->getDate_dep()
        ]);
        $result = $prepare->fetchAll();
        return $result;
    }
}

  // Fonction permettant de faire un menu deroulant de la classe
  public function afficheVol() {
    $pdo=new connexionpdo();
    $prepare = $pdo->pdo_start()->prepare("SELECT * FROM vol");
    $prepare->execute();
    $result = $prepare->fetchAll();
    return $result;
  }

}
?>
