<?php
$_message ="";
if (isset($_POST['sub'])) {
    $_message = "Le nom du fichier est " . $_FILES['photo_profile']['name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-info"width="100%">

    <div class="w-400 vh-30 rounded shadow ">
        <form enctype="multipart/form-data">
            <div class="w-400  form-group p-5 bg-info d-flex flex-column  align-items-center justify-content-center vh-30">
                <label for="pp" class="m-0"><img src="https://static.vecteezy.com/system/resources/thumbnails/009/734/564/small/default-avatar-profile-icon-of-social-media-user-vector.jpg" class="rounded-circle shadow w-30 mb-4"></label>
                <input type="file" name="photo_profile" id="pp" class="invisible">
                <div><?= $_message?></div>
                <input type="submit" name="valider" value="Envoyer" class="btn bg-success text-light" >
        </form>
    </div>

</body>

</html>