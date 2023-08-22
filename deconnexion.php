<?php

session_start();
include_once 'config.php';

$Set_user_online = $connect->prepare("UPDATE users SET is_online = 0 WHERE id=:id_user");
$Set_user_online->bindParam(":id_user", $_SESSION['id_session']);
$Set_user_online->execute();
session_destroy();
header('location:index.php');
exit();
