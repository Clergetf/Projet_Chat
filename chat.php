<?php
$title = "Chat";
$style = "css/chat.css";
require 'class/Login.php';
include 'elements/header.php';

$username = (new Login());
$pdo = (new Connexion)->getPDO();


if (!isset($_SESSION['loggedin'])) {
    header('Location: loginform.php');
    exit;
}
require 'getmessage.php';
require 'getprivatemessage.php';

?>

<div id="chatplace" class="chat">
    <div class="chatbox">
        <h4>Messages</h4>
        <div id="chatbox" class="blockchat scroll">
            <div id="chatbox">
        <?php include 'chatlog.php'; ?>
        </div>
     

    </div>
    </div>

    <div class="users"><h4>Utilisateurs</h4>
    <div class="blockusers scroll">
    <?php include 'getuser.php'; ?>
    </div>
    
<!-- The Popup -->
<div id="myPopup" class="Popup">

  <!-- Popup content -->
  <div class="Popup-content">
    <span class="close">&times;</span>
    <p id="popupcontent">Envoyez un message privé à <span id="popupuser"></span></p>
    <div>
        <form id="privatechat" class="privatemessagebox" action="chat.php" method="POST">
            <textarea name="privatemessage" id="privatemessage" class="envoiprivatemessage"></textarea>
            <button type="submit" id="privatechatSubmit" name="sendprivatemessage" class="sendprivatemessage"> envoyer</button>
        </form>
    </div>
    <div>
        <div id="privatechatbox">
        <?php include 'privatechatlog.php';?>
        </div>
    </div>
    <div id="result"></div>
  </div>

</div>


    <div><a class="text-decoration-none" href="logout.php"><button type="button">Logout</button></a></div>
</div>

<div>        
    <form class="messagebox" action="chat.php" method="post">
            <textarea id ="usrmsg" class="envoimessage" name="message"></textarea>
            <button type="submit" id="chatSubmit" name="sendmessage" class="sendmessage" >Envoyer</button>
        </form>
    </div>
</div>

<script src="script.js">async</script>



<?php
include 'elements/footer.php';

?>