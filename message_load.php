<?php
            
	 session_start();
	 include_once 'config.php';
    // echo rand(5, 15), "\n";
    if(!isset($_GET['id_user'])){
        $user_freind=2;
    }else{
        $user_freind=$_GET['id_user']; 
    }
    $show_message_query = $connect->query("SELECT * FROM `message` WHERE (user_send=".$_SESSION['id_session']." and user_receive=".$user_freind.") or (user_send=".$user_freind." and user_receive=".$_SESSION['id_session'].") ORDER BY day_time_message ASC");
        while ($resultat = $show_message_query->fetch(PDO::FETCH_ASSOC)){
            if(!$resultat){
                echo "<p class=\"message-text\">"."Aucun message,Dite bonjour "."</p>";}
            
            if($resultat['user_receive']==$user_freind){
             echo "<p class=\"message-text\">" .htmlspecialchars($resultat['content_message']). "</p>";
            }else{ 
             echo "<p class=\"message-text1\">" .htmlspecialchars($resultat['content_message']). "</p>";}
            
         }

        echo "</div>";
    
 
?>