<?php 

    include_once 'config.php';
    header("Content-Type: application/json");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
   
    $Select_users_query = $connect->query("SELECT *   FROM `users` ORDER BY is_online DESC");
    $r=$Select_users_query->fetch();
    echo json_encode($r);
?>

</body>
</html>