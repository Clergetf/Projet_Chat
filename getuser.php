<?php

$pdo = (new Connexion)->getPDO();

$utilisateur= $pdo->query("SELECT username FROM user");

while ($user = $utilisateur->fetchArray(SQLITE3_ASSOC) )
 {
    echo '<p class="utilisateur"><button class="myBtn" id="myBtn">'.htmlentities($user['username']).'</button></p>';
}

$pdo->close();

?>