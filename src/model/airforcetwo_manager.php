<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/airforcetwo/src/model/connexionPDO.php');

class airforcetwo_manager
{
    public function __construct()
    {

    }

    // Fonction permettant d'ajouter un utilisateur
    public function addUser(airforcetwo $donnees) {
    $pdo=new connexionpdo();
    $prepare = $pdo->pdo_start()->prepare("INSERT INTO inscription (nom, prenom, phone, adresse, pays, email, mdp, fidelite) VALUES (?,?,?,?,?,?,?,?)");
    $prepare->execute([
        $donnees->getNom(),
        $donnees->getPrenom(),
        $donnees->getPhone(),
        $donnees->getAdresse(),
        $donnees->getPays(),
        $donnees->getEmail(),
        $donnees->getMdp(),
        $donnees->getFidelite()

      ]);
        $this->setMessage('Vous êtes inscrit avec succès','/src/view/login.php');
}

    // Fonction permettant la connexion d'un utilisateur
    public function login(airforcetwo $donnees) {
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare("SELECT * FROM inscription WHERE email = ? AND mdp = ?");
        $prepare->execute([
            $donnees->getEmail(),
            $donnees->getMdp()
        ]);
        $result = $prepare->fetch(PDO::FETCH_ASSOC);
        if($result) {
            setcookie('id', $result['id'], time()+3600, '/');
            session_start(); //On ouvre la session de l'utilisateur
            $this->setMessage('Connexion effectué','index.php');
        } else {
            $this->setMessage('Connexion impossible','src/view/login.php');
        }
    }

    // Fonction permettant la deconnexion d'un utilisateur
    public function deconnexion()
    {
        setcookie('id', $result['id'], time()-1, '/');
        $this->setMessage('Deconnexion effectué','index.php');
    }


    public function afficheUser() {
        $pdo=new connexionpdo();
        $prepare = $pdo->pdo_start()->prepare('SELECT * FROM inscription WHERE id=?');
        $prepare->execute([
          $_COOKIE['id']
        ]);
        $result = $prepare->fetch();
        return $result;
    }


    public function setMessage($message, $page) {
    $_SESSION['message'] = $message;
    header("location: /airforcetwo/$page");
    }



}
