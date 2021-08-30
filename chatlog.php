<?php


$pdo = (new Connexion)->getPDO();


$query= $pdo->query("SELECT content, sendAt, sender FROM message");

while ($entry = $query->fetchArray(SQLITE3_ASSOC) )
 {
    echo '<p id="messages" class="message">'.'Utilisateur : ' . '<strong>'.htmlspecialchars($entry['sender']).'</strong>' . ' ' . htmlspecialchars($entry['sendAt']). '<br>' .
      'Message : ' . htmlspecialchars($entry['content']) .'</p>';
}

$pdo->close();

?>