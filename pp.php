<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="Nom">
        <label for=""></label>
        <textarea  name="" id=""></textarea>
        <input type="submit" value="Envoyer">
    </form>

    
    <?php

    try {
        $conn = new PDO('mysql:host=localhost;dbname=mabase', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conn->query("INSERT INTO ust VALUE (NULL,$_)")

    } catch (Exception $th) {
        die("Erreur");
    }


    ?>

</body>

</html>