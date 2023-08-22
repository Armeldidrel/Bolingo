<?php 
error_reporting(0);
$connect =  new PDO("mysql:host=localhost;dbname=mabd", 'root', '');
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);?>