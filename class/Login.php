<?php
    require 'Connexion.php';

    
    Class Login {

        public function log_in() {
            $pdo= (new Connexion())->getPDO();
            if(isset($_POST['username']) and isset($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
         
                $query=$pdo->query("SELECT COUNT(*) as count FROM user WHERE username='$username' AND password='$password'");
                $row=$query->fetchArray(SQLITE3_ASSOC);
                $count=$row['count'];
                var_dump($count);
                if($count > 0){
                    echo "<div class='alert alert-success'>Login successful</div>";
                    session_regenerate_id();
		            $_SESSION['loggedin'] = TRUE;
		            $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    var_dump($_SESSION);

                    header('Location: chat.php');
                    
                }else{
                    echo "<div class='alert alert-danger'>Invalid username or password</div>";
                }
            }
        }
    }



   
?>