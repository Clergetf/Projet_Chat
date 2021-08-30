<?php
$user2 = $_COOKIE['user2'];
$user1 = $_SESSION['username'];
$date = date("F j, Y, g:i a");

$pdo = (new Connexion)->getPDO();


$query= $pdo->query("SELECT content, sendAt, user1 FROM private WHERE user1 = '$user1' AND user2 = '$user2' OR user1 = '$user2' AND user2 = '$user1' ORDER BY id DESC LIMIT 10");



while ($entry = $query->fetchArray(SQLITE3_ASSOC) )
 {
    echo '<p id="messages" class="message">'.'Utilisateur : ' . '<strong>'.htmlspecialchars($entry['user1']).'</strong>' . ' ' . htmlspecialchars($entry['sendAt']). '<br>' .
      'Message : ' . htmlspecialchars($entry['content']) .'</p>';
}

$pdo->close();

?>