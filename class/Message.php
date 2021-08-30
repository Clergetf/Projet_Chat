<?php
require 'Connexion.php';


class Message {

public function getMessage()
{
    $pdo=(new Connexion())->getPDO();
    if(isset($_POST['message'])) 
    {
        $message = $_POST['message'];
        $date = date("F j, Y, g:i a");
        $sender = $_SESSION['username'];

        $sth=$pdo->prepare("INSERT INTO message (content,sendAt,sender) VALUES ('$message','$date','$sender')");
        return $sth->execute();
    }
}


public function postMessage()
{
    $pdo = (new Connexion())->getPDO();
    $query= $pdo->query("SELECT content, sendAt, sender FROM message");
    return $query;
}

public function getUtilisateur()
{
    $pdo = (new Connexion())->getPDO();
    $utilisateur= $pdo->query("SELECT username FROM user");
    return $utilisateur;

}


}


?>