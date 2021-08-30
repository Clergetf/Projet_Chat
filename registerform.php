<?php
$title = "Registration";
$style = "css/form.css";
require 'class/Register.php';
include "elements/header.php";




$sth = (new Register());

?>
    

        <div class="formu-body">
            <form action="" method="post">

                <h1>Inscription</h1>

                <label><b>E-mail</b></label>
                <input type="text" placeholder="Entrez votre e-mail" name="email" required autocomplete="off">

                <label><b>Pseudo</b></label>
                <input type="text" placeholder="Entrez votre pseudo" name="username" required autocomplete="off">

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entre votre mot de passe" name="password" required autocomplete="off">

                <input type="submit" id="submit" value="S'inscrire">

                <p><b>Vous avez déjà un compte? <a href="./loginform.php">Connecter vous ici</b></a></p>
            </form>
        </div>

<?php
include "elements/footer.php";
?>
