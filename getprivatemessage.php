<?php

$pdo = (new Connexion)->getPDO();

if (isset($_POST['privatemessage'])) {

$user2 = $_COOKIE['user2'];
$user1 = $_SESSION['username'];
$message = $_POST['privatemessage'];
$date = date("F j, Y, g:i a");


$sth=$pdo->prepare("INSERT INTO private (user1,user2,content,sendAt) VALUES ('$user1','$user2','$message','$date')");
$sth->execute();
}

$pdo->close();

?>