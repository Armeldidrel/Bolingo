<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['id_session'])) {
    header('location:index.php');
} ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/bootstrap.bundle.min.js" defer ></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <style>
        .w-30 {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            background-color: gray;
        }

        body {
        }
    </style>

</head>

<body>
    <?php include 'Acceuil.php'?>
    <div class="d-grid place-items-center vh-100">


        <div class=" w-800 d-flex  rounded shadow align-items-center justify-content-center p-5">
            <?php
            $connect =  new PDO("mysql:host=localhost;dbname=mabd", 'root', '');
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $show_message_query = $connect->query("SELECT * FROM `users` WHERE id=" . $_SESSION['id_session'] . "");
            $resultat = $show_message_query->fetch(PDO::FETCH_ASSOC);
            ?>
            <form action="modification.php" method="post">
                <h1 class="mb-3 fs-2">Modification des informations du profil</h1>
                <div class="mb-3 d-flex align-items-center justify-content-center ">
                    <br>
                    <div class="w-30 rounded-circle">
                        <label for="pp">
                        <?php echo "<img src=\"".$resultat['Photo_prophile']."\"  width=\"100%\" height=\"100%\">"; ?>
                        </label>
                        <input type="file" name="photo_profile" id="pp" style="visibility:hidden; margin-top:10px">

                    </div>

                </div>

                <div class="mb-3">
                    <label for="mail" class="form-label">Adresse mail:</label>
                    <?php echo "<input type=\"email\" class=\"form-control\" name=\"email\" value=\"" . $resultat['user_email'] . "\"" . ">"; ?>
                </div>
                <div class="mb-3">
                    <label for="prenom">Nom :</label>
                    <?php echo "<input type=\"text\" class=\"form-control\" name=\"nom\" value=\"" . $resultat['nom'] . "\"" . ">"; ?>
                </div>


                <div class="mb-3">
                    <label for="pseudonyme" class="form-label">Prenom :</label>
                    <?php echo "<input type=\"text\" class=\"form-control\" name=\"prenom\" value=\"" . $resultat['prenom'] . "\"" . ">"; ?>
                </div>
                <div class="mb-3">
                    <label for="pseudonyme" class="form-label">Date de naissance :</label>
                    <?php echo "<input type=\"text\" class=\"form-control\" name=\"dateNaissance\" value=\"" . $resultat['user_passWord'] . "\"" . ">"; ?>
                </div>
                <div class="mb-3">
                    <label for="ville">* Dans quelle ville habitez-vous ?</label>
                    <select id="ville" name="ville" class="form-control">
                        <option value="Brazzaville">Brazzaville</option>
                        <option value="Pointe-Noire">Pointe-Noire</option>
                        <option value="Dolisie">Dolisie</option>
                        <option value="Nkayi">Nkayi</option>
                        <option value="Impfondo">Impfondo</option>
                        <option value="Madingou">Madingou</option>
                        <option value="Owando">Owando</option>
                        <option value="Sibiti">Sibiti</option>
                        <option value="Mossendjo">Mossendjo</option>
                        <option value="Kinkala">Kinkala</option>
                        <option value="Gamboma">Gamboma</option>
                        <option value="Ewo">Ewo</option>
                        <option value="Ouesso">Ouesso</option>
                        <option value="Loandjili">Loandjili</option>
                        <option value="Kayes">Kayes</option>
                        <option value="Ouésso">Ouésso</option>
                        <option value="Makoua">Makoua</option>
                        <option value="Mossaka">Mossaka</option>
                        <option value="Loutété">Loutété</option>
                        <option value="Sibiti">Sibiti</option>
                        <option value="Mossendjo">Mossendjo</option>
                        <option value="Kinkala">Kinkala</option>
                        <option value="Gamboma">Gamboma</option>
                        <option value="Boko">Boko</option>
                        <option value="Ouesso">Ouesso</option>
                        <option value="Nkayi">Nkayi</option>
                        <option value="Dolisie">Dolisie</option>
                        <option value="Madingou">Madingou</option>
                        <option value="Impfondo">Impfondo</option>
                        <option value="Owando">Owando</option>
                        <option value="Bétou">Bétou</option>
                        <option value="Loubomo">Loubomo</option>
                        <option value="Sibiti">Sibiti</option>
                        <option value="Ewo">Ewo</option>
                        <option value="Kayes">Kayes</option>
                        <option value="Sembe">Sembe</option>
                        <option value="Boundji">Boundji</option>
                        <option value="Makoua">Makoua</option>
                        <option value="Mossaka">Mossaka</option>
                        <option value="Lékana">Lékana</option>
                        <option value="Mossendjo">Mossendjo</option>
                        <option value="Kinkala">Kinkala</option>
                        <option value="Gamboma">Gamboma</option>
                        <option value="Sibiti">Sibiti</option>
                        <option value="Makabana">Makabana</option>
                        <option value="Ouesso">Ouesso</option>
                        <option value="Kibangou">Kibangou</option>
                    </select>
                </div>
                <h5>Changer de mot de passe</h5>
                <div class="mb-3">
                    <label for="ancien_pass" class="form-label">Ancien mot de passe :</label>
                    <?php echo "<input type=\"password\" class=\"form-control\" name=\"password\" value=\"" . $resultat['user_passWord'] . "\"" . ">"; ?>
                </div>
                <div class="mb-3">
                    <label for="new_pass" class="form-label">Nouveau mot de passe :</label>
                    <?php echo "<input type=\"password\" class=\"form-control\" name=\"password_comf\" value=\"" . $resultat['user_passWord'] . "\"" . ">"; ?>
                </div>

                <button type="submit" class="btn btn-primary">Enregister</button>
            </form>
        </div>
    </div>


</body>

</html>



<?php
?>