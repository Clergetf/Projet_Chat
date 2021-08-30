<?php

$pdo = (new Connexion)->getPDO();

if (isset($_POST['message'])) {
    $message = htmlspecialchars($_POST['message']);
    $date = date("F j, Y, g:i a");
    $sender = $_SESSION['username'];
    

    $sth=$pdo->prepare("INSERT INTO message (content,sendAt,sender) VALUES ('$message','$date','$sender')");
    $sth->execute();
}

$pdo->close();
?>