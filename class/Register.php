<?php  
require 'Connexion.php';


Class Register {
        
        public function register()
        {
            $pdo = (new Connexion())->getPDO();
            if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email'])) {
                if (empty(trim($_POST['username']))) {
                    echo "Please enter a username";
                } elseif (!preg_match_all('/^[a-zA-Z0-9_]+$/', trim($_POST['username']))) {
                    echo "<div class='alert alert-danger'> Username can only contain letters, numbers, and underscore.</div>";
                } else {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
            
                    $query=$pdo->query("SELECT COUNT(*) as count FROM user WHERE username='$username' OR email='$email'");
                    $row=$query->fetchArray();
                    $count=$row['count'];
            
                    if ($count > 0) {
                        echo "<div class='alert alert-danger'>Username already exist</div>";
                    } else {
                        echo "<div class='alert alert-success'>Registrastion done !</div>";
                        $sth=$pdo->prepare("INSERT INTO user (username,password,email) VALUES ('$username','$password','$email')");
                        $sth->execute();
                    }
                }
            }
            
        }
}



?>