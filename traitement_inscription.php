<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $motDePasse=$_POST['password_comf'];
  $prenom =$_POST['prenom'];
  $nom =$_POST['nom'];
  $email =$_POST['email'];
  $chemin_temp = $_FILES['photo_profile']['tmp_name'];
  $nom_fichier = $_FILES['photo_profile']['name']; // Nom du fichier d'origine
  $chemin_des = "C:\\xampp\\htdocs\\Teste\\Phot_de_profile\\" . $nom_fichier;
  $chemin_relatif_photo="Phot_de_profile/";
  $Photto_to_upload=$chemin_relatif_photo.$nom_fichier;

move_uploaded_file($chemin_temp, $chemin_des);

  if (!empty($prenom) && !empty($nom)&& !empty($email) && !empty($motDePasse)) {



    $PDP_connect = new PDO('mysql:host=localhost;dbname=mabd', 'root', '');
    $PDP_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   

    $query = "INSERT INTO users VALUES (NULL,:nom,:prenom,:motDePasse,:email,0,NULL,:photo)";
$stmt = $PDP_connect->prepare($query);

$stmt->bindParam(':motDePasse', $motDePasse);
$stmt->bindParam(':prenom', $prenom);
 $stmt->bindParam(':nom', $nom);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':photo',$Photto_to_upload);
$stmt->execute();
}
header('location:index.php');


    exit();
}
