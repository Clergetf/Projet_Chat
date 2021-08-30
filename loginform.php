<?php
$title = "Login";
$style = "css/form.css";
require 'class/Login.php';
include "elements/header.php";


$query = (new Login())->log_in();

?>



<body>
    
        <div class="formu-body">

            <form action="loginform.php" method="post">
                <h1>Connexion</h1>

                <label><b>Pseudo</b></label>
                <input type="text" placeholder="Entrez votre pseudo" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="password" required>

                <input type="submit" id="submit" value="Se connecter">

                <p><b>Vous avez pas de compte? <a href="./registerform.php">Inscrivez vous ici.</b></a></p>
        
            </form>

        </div>
        
<?php
include "elements/footer.php";
?>