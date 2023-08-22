<?php

session_start();
if(!isset( $_SESSION['id_session'])){
    header('location:index.php');
}

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
//   $pseudonyme = $_POST['pseudonyme'];
  $motDePasse=$_POST['password_comf'];
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
//   $genre = $_POST['genre'];
//   $profession = $_POST['profession'];
//   $taille = $_POST['taille'];
//   $poids = $_POST['poids'];
  $email = $_POST['email'];
//   $telephone = $_POST['telephone'];
//   $dateNaissance = $_POST['dateNaissance'];
//   $ville = $_POST['ville'];
//   $description = $_POST['description'];

$chemin_temp = $_FILES['photo_profile']['tmp_name'];
$nom_fichier = $_FILES['photo_profile']['name']; // Nom du fichier d'origine
$chemin_des = "C:\\xampp\\htdocs\\Teste\\Phot_de_profile\\" . $nom_fichier;
$chemin_relatif_photo="Phot_de_profile/";
$Photto_to_upload=$chemin_relatif_photo.$nom_fichier;


move_uploaded_file($chemin_temp, $chemin_des);

  // Vérifier si les champs obligatoires sont renseignés
  if (/*!empty($pseudonyme) && */!empty($prenom) && !empty($nom) /*&& !empty($genre) && !empty($profession) && !empty($taille) && !empty($poids) */&& !empty($email) /*&& !empty($telephone) && !empty($dateNaissance) && !empty($ville) && !empty($description)*/) {


   
    
    $PDP_connect = new PDO('mysql:host=localhost;dbname=mabd', 'root', '');
    $PDP_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($nom_fichier!=""){
      $change_pp="UPDATE users set Photo_prophile=:pp WHERE id=".$_SESSION['id_session']."";
      $sstmt = $PDP_connect->prepare($change_pp);
      $stmt->bindParam(':pp', $Photto_to_upload);
      $sstmt->execute();
    }

    // Préparer la requête d'insertion
    $query = "UPDATE users set nom=:nom,prenom=:prenom,user_passWord=:motDePasse,user_email=:email WHERE id=".$_SESSION['id_session']."";
    $stmt = $PDP_connect->prepare($query);

$stmt->bindParam(':motDePasse', $motDePasse);
// // $stmt->bindParam(':pseudonyme', $pseudonyme);
$stmt->bindParam(':prenom', $prenom);
 $stmt->bindParam(':nom', $nom);
// // $stmt->bindParam(':genre', $genre);
// // $stmt->bindParam(':profession', $profession);
// // $stmt->bindParam(':taille', $taille);
// // $stmt->bindParam(':poids', $poids);
$stmt->bindParam(':email', $email);
// // $stmt->bindParam(':telephone', $telephone);
// // $stmt->bindParam(':dateNaissance', $dateNaissance);
// // $stmt->bindParam(':ville', $ville);
// $stmt->bindParam(':description', $description);
$stmt->execute();}
header('location:Profile.php');

//     // Exécuter la requête
//     if ($stmt->execute()) {
//       // Succès de l'insertion
//       echo "Enregistrement réussi!";
//     } else {
//       // Erreur lors de l'insertion
//       echo "Erreur lors de l'enregistrement : " . $stmt->error;
//     }

//     // Fermer la connexion
//     $stmt->closeCursor();
//   } else {
//     // Des champs obligatoires sont vides
//     echo "Veuillez remplir tous les champs obligatoires.";
//   }
}

?>
