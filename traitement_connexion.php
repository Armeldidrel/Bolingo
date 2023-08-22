
<?php 
    include_once 'config.php';
    session_start();
    
    if(isset($_POST['submit'])){

        $userName=$_POST['username'];
        $userPassWord=$_POST['MotDePass'];

        if(!empty($userName)&&!empty( $userPassWord)){

            $PDP_connect = new PDO('mysql:host=localhost;dbname=mabd', 'root', '');
            $PDP_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $requette_login_verfication=$PDP_connect->query("SELECT * FROM `users` WHERE `user_email` ='$userName' AND `user_passWord` = '$userPassWord'");
            if(!$resultat=$requette_login_verfication->fetch(PDO::FETCH_ASSOC)){
                require 'index.php';
                echo "
                        <script>
                        let px = document.getElementById('error-pass-matching');
                        px.textContent=\"❌Mot de passe ou nom d'utilisateur incorrect\";
                        </script>
                    ";
            }else{ 
                // if (!isset($_SESSION['id_session'])) {
                    $_SESSION['id_session'] = $resultat['id'];
                    $Set_user_online=$connect->prepare("UPDATE users SET is_online=1 WHERE id=:id_user");
                    $Set_user_online->bindParam(":id_user",$resultat['id']);
                    $Set_user_online->execute();
                // }  
                header('location:Acceuil.php');
                exit();
		
            }

            
        }
    }

?>