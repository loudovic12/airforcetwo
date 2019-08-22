<?php
require_once ('connexionPDO.php');

class vol
{
    public $id, $nomav, $numav, $ville_dep, $_ville_arr, $date_dep, $date_arr, $h_dep, $h_arr, $prix, $img;


    public function __construct(array $donnees)
    {
      $this->hydrate($donnees);
    }

    // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
    public function hydrate(array $donnees)
    {
      foreach ($donnees as $key => $value)
      {
        // On récupère le nom du setter correspondant à l'attribut.
        $method = 'set'.ucfirst($key);

        // Si le setter correspondant existe.
        if (method_exists($this, $method))
        {
          // On appelle le setter.
          $this->$method($value);
        }
      }
    }


    public function setId($id) {
        if ($id >= 0 && $id <= 10) {
            $this->_id = $id;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setNomav($nomav) {
        if (is_string($nomav) && strlen($nomav) <= 50) {
            $this->_nomav = $nomav;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setNumav($numav) {
        if (is_string($numav) && strlen($numav) <= 50) {
            $this->_numav = $numav;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setVille_dep($ville_dep) {
        if (is_string($ville_dep) && strlen($ville_dep) <= 50) {
            $this->_ville_dep = $ville_dep;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setVille_arr($ville_arr) {
        if (is_string($ville_arr) && strlen($ville_arr) <= 50) {
            $this->_ville_arr = $ville_arr;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setDate_dep($date_dep)
    {
        $this->_date_dep = $date_dep;
    }

    public function setDate_arr($date_arr)
    {
        $this->_date_arr = $date_arr;
    }

    public function setH_dep($h_dep) {
        if (is_string($h_dep) && strlen($h_dep) <= 50) {
            $this->_h_dep = $$h_dep;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setH_arr($h_arr) {
        if (is_string($h_arr) && strlen($h_arr) <= 50) {
            $this->_h_arr = $h_arr;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setPrix($prix) {
        if ($prix >= 0 && $prix <= 20) {
            $this->_prix = $prix;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setImg($img) {
        if (is_string($img) && strlen($img) <= 50) {
            $this->_img = $img;
        } else { $this->setMessage('Champs incorrect','index.php'); }
    }

    public function setMessage($message, $page) {
        $_SESSION['message'] = $message;
        header("location: /airforcetwo/$page");
    }

    public function getId() { return $this->_id; }
    public function getNomav() { return $this->_nomav; }
    public function getNumav() { return $this->_numav; }
    public function getVille_dep() { return $this->_ville_dep; }
    public function getVille_arr() { return $this->_ville_arr; }
    public function getDate_dep() { return $this->_date_dep; }
    public function getDate_arr() { return $this->_date_arr; }
    public function getH_dep() { return $this->_h_dep; }
    public function getH_arr() { return $this->_h_arr; }
    public function getPrix() { return $this->_prix; }
    public function getImg() { return $this->_img; }
    public function getMessage() { return $this->_message; }

}
?>
