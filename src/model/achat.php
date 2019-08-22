<?php
require_once ('connexionPDO.php');

class achat
{
    public  $_num_carte, $_expi, $_codesecu;



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

  //  public function setId($id) {
  //      if ($id >= 0 && $id <= 10) {
    //        $this->_id = $id;
      //  } else { $this->setMessage('Champs incorrect','index.php'); }
    //}

  //  public function setIduser($id_user) {
    //    if ($id_user >= 0 && $id_user <= 10) {
      //      $this->_id_user = $id_user;
        //} else { $this->setMessage('Champs incorrect','index.php'); }
  //  }

    //public function setIdvol($id_vol) {
      //  if ($id_vol >= 0 && $id_vol <= 10) {
        //    $this->_id_vol = $id_vol;
        //} else { $this->setMessage('Champs incorrect','index.php'); }
    //}
    public function setNum_carte($num_carte) {

            $this->_num_carte = $num_carte;

    }
    public function setCodesecu($codesecu) {

            $this->_codesecu = $codesecu;

    }
    public function setExpi($expi) {

            $this->_expi = $expi;

    }

    public function setMessage($message, $page) {
        $_SESSION['message'] = $message;
        header("location: /airforcetwo/$page");
    }

  //  public function getId() { return $this->_id; }
  //  public function getIduser() { return $this->_id_user; }
  //  public function getIdvol() { return $this->_id_vol; }
   public function getNum_carte() { return  $this->_num_carte; }
  public function getExpi() { return $this->_expi; }
   public function getCodesecu() { return $this->_codesecu; }
  public function getMessage() { return $this->_message; }
//$id, $id_user, $id_vol,

}

?>
