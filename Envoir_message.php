<?php 
error_reporting(0);
    session_start();


		

        $message=$_POST['message'];
		$sender=$_SESSION['id_session'];
		$receiver=$_GET['id_user'];
		if(empty($receiver)){
			header('location:message.php');
		}
        

			if(!empty($message)){
                
    	$connect =  new PDO("mysql:host=localhost;dbname=mabd", 'root','');
		$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $insertion_message=$connect->prepare("INSERT INTO `message` VALUES (NULL,:sender,:receiver,:mes,NOW())");
				$insertion_message->bindParam(":mes",$message);
				$insertion_message->bindParam(":sender",$sender);
				$insertion_message->bindParam(":receiver",$receiver);
                $is_exe=$insertion_message->execute();
				header('location:message.php?id_user='.$receiver.'');
				exit();

			}
