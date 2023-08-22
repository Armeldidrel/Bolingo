<?php
error_reporting(0);
session_start();
include_once 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<title>Document</title>

	<style>
		* {
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
			font-family: Arial, sans-serif;
		}

		a {
			text-decoration: none;
			color: #592D14;

		}

		body {
			width: 100%;
			height: 100vh;
			box-sizing: border-box;
			background-color: #592D14;
			overflow: hiddenj;
			display: grid;
			place-items: center;
			padding-top: 10px;
		}

		.box-main-message,
		.Box-main-message-content,
		.message-principal {
			position: relative;
		}

		.box-main-message {
			width: 80%;
			height: 95vh;
			background-color: #E7D1BC;
			display: flex;
		}

		.box-users {
			width: 400px;
			height: 95vh;
			background-color: #FFE4D4;
			display: flex;
			flex-direction: column;
		}

		.Box-main-message-content {
			width: 100%;
			height: 95vh;
			background-color: #F9E4D9;
			display: flex;
			flex-direction: column;
		}

		.box-header-users {
			width: 100%;
			height: 50px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			background-color: #D9B7A9;
			padding: 0 10px;
		}

		.recheche {
			display: flex;
			align-items: center;
		}

		.recheche input[type="text"] {
			border: none;
			border-radius: 4px;
			padding: 5px;
		}

		.recheche input[type="submit"] {
			border: none;
			background-color: transparent;
			cursor: pointer;
			margin-left: 5px;
		}

		.user-freind-one-line {
			height: 88vh;
			background-color: #FFE4D4;
			overflow-y: scroll;
			padding: 10px;
		}

		.user-freind-one-line>div:not(:last-child) {
			margin-bottom: 10px;
		}

		.user-image-in-box {
			width: 40px;
			height: 40px;
			background-color: #D9B7A9;
			border-radius: 50%;
			margin-right: 10px;
			overflow: hidden;
			border: 3px solid blue;
		}

		.user-name {
			font-weight: bold;
			margin-bottom: 5px;
		}

		.header-Box-main-message-content {
			width: 100%;
			height: 50px;
			background-color: #D9B7A9;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.message-principal {
			width: 100%;
			height: 80vh;
			background-color: #FFFFFF;
			padding: 10px;
			overflow-y: scroll;
		}

		.for_mulaire {
			width: 100%;
			height: 52px;
			background-color: #FFE4D4;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 0 5px;
		}

		.for_mulaire textarea {

			border: none;
			border-radius: 4px;
			padding: 5px;
			background-color: #165559;
			resize: none;

		}

		.for_mulaire input[type="submit"] {

			border: none;
			background-color: green;
			color: #FFFFFF;
			border-radius: 4px;
			padding: 5px 10px;
			margin-left: 10px;
			cursor: pointer;
			display: none;
		}

		.user-freind-one-line .user {
			display: flex;
			align-items: center;
			justify-content: left;
			border: 2px solid #dedede;
			background-color: #f1f1f1;
			border-radius: 5px;
			padding: 10px;
			margin: 10px 0
		}

		.message-text {
			width: 300px;
			height: auto;
			color: white;
			padding: 5px 10px;
			background-color: black;
			border-radius: 15px;
			font-size: 20px;
			margin-bottom: 30px;
			margin-left: auto;

		}

		.message-text1 {
			width: 300px;
			height: auto;
			color: white;
			padding: 5px 10px;
			background-color: gray;
			border-radius: 15px;
			font-size: 20px;
			margin-bottom: 30px;
			margin-right: auto;


		}

		#send_img {
			width: 30px;
			cursor: pointer;
		}

		.message-body {
			margin: 0;
			padding: 0;
			width: auto;
			height: auto;
		}

		.online {
			width: 12px;
			height: 12px;
			border-radius: 50%;
			background-color: green;
			margin-left: -12px;
			margin-right: 12px;
		}

		.more {
			position: absolute;
			right: 35px;
			visibility: hidden;
		}

		.offline {
			width: 12px;
			height: 12px;
			border-radius: 50%;
			background-color: gray;
			margin-left: -12px;
			margin-right: 12px;
		}

		#show_user {
			display: none;
		}

		@media screen and (max-width:767px) {

			/* .Box-main-message-content {
				display: none;
			} */
			.box-users {
				display: none;
			}

			/* .Box-main-message-content {
				width: 100%;
				height: 100vh;
				background-color: #E7D1BC;
				display: flex;
				overflow: hidden;

			} */
			.box-main-message {

				width: 100%;
				height: 100vh;
				background-color: #E7D1BC;
				display: flex;
				overflow: hidden;

			}

			body {
				width: 100%;
				height: 100vh;
				padding: 0px;
				overflow: hidden;
				display: grid;
				place-items: center;
				overflow: hidden;
			}

			#show_user {
				display: block;
				position: absolute;
				left: 10px;
			}

			textarea {
				width: 20em;
			}
		}
	</style>
</head>

<body>
	<div class="box-main-message">
		<div class="box-users" id="bu">
			<div class="box-header-users">
				<a href="Acceuil.php">🔙</a>
				<div class="recheche">
					<form class="r">
						<input type="text" name="recherche">
						<input type="submit" name="sub_reche" value="🔍">
					</form>
				</div>
			</div>
			<div class="user-freind-one-line">
				<?php
				$id_user = " ";
				$Select_users_query = $connect->query("SELECT *   FROM `users` ORDER BY is_online DESC");
				while ($resultat = $Select_users_query->fetch(PDO::FETCH_ASSOC)) {
					if ($resultat['id'] != $_SESSION['id_session']) {
						echo "<a onclik=\"show_covers()\" href=\"message.php?id_user=" . $resultat['id'] . "\" id=\"linkMessageUser\">
						
					<div class=\"user\">";
						echo "<div class=\"user-image-in-box\">
						<img src=\"" . $resultat['Photo_prophile'] . "\" width=\"100%\" heigth=\"100vh\" > 
						
					</div>";
						if ($resultat['is_online']) {
							echo "<div class=\"online\"></div>";
						} else {
							echo "<div class=\"offline\"></div>";
						}
						echo "<div class=\"user-name\">" . $resultat['nom'] . " " . $resultat['prenom'] . "</div>";


						echo "</div>  </a>";
					}
				}



				?>

			</div>
		</div>

		<div class="Box-main-message-content" id="mes-box">
			<div class="header-Box-main-message-content">
				<p onclick="show_user()" id="show_user"><img src="left-arrow.png" width="30px"></p>
				<?php
				if (isset($_GET['id_user'])) {
					$Select_users_query = $connect->query("SELECT *   FROM `users` where id=" . $_GET['id_user'] . "");
					$resultat = $Select_users_query->fetch(PDO::FETCH_ASSOC);
					echo "<div class=\"user-image-in-box\">" . "
			<img src=\"" . $resultat['Photo_prophile'] . "\" width=\"100%\" heigth=\"100vh\" >
			</div>";
					if ($resultat['is_online']) {
						echo "<div class=\"online\"></div>";
					} else {
						echo "<div class=\"offline\"></div>";
					}
					echo "<div class=\"user-name\">" . $resultat['nom'] . " " . $resultat['prenom'] . "</div>";
				}
				?>
				<div class="more" id="btn-del"><img src="delete.png" width="20px"></div>
			</div>
			<?php
			if (!isset($_GET['id_user'])) {
				$user_freind = 0;
			} else {
				$user_freind = $_GET['id_user'];
			}
			$show_message_query = $connect->query("SELECT * FROM `message` WHERE (user_send=" . $_SESSION['id_session'] . " and user_receive=" . $user_freind . ") or (user_send=" . $user_freind . " and user_receive=" . $_SESSION['id_session'] . ") ORDER BY day_time_message ASC");
			echo "<div class=\"message-principal\" id=\"messageBody\">";
			while ($resultat = $show_message_query->fetch(PDO::FETCH_ASSOC)) {
				if (empty($user_freind)) {
					echo "<p class=\"message-text\">" . "Aucun message,Dite bonjour Appuyer sur un profile pour comencer a chater  " . "</p>";
				}

				if ($resultat['user_receive'] == $user_freind) {
					echo "<p class=\"message-text\" onclik=\"delmes()\">" . htmlspecialchars($resultat['content_message']) . "</p>";
				} else {
					echo "<p class=\"message-text1\" onclik=\"delmes()\">" . htmlspecialchars($resultat['content_message']) . "</p>";
				}
			}

			echo "</div>";



			?>
			<div class="for_mulaire">
				<?php if (isset($_GET['id_user'])) {
					$id_user = $_GET['id_user'];
				}
				?>
				<form action="Envoir_message.php?id_user=<?= $id_user ?>" method="post" id="frm">
					<textarea cols="50.5" rows="1" placeholder="Ecrivez ici.." name="message"></textarea>
					<label for="sb"> <img src="send-message.png" id="send_img"></label>
					<input type="submit" name="submit" value="envoyer" id="sb">
				</form>
			</div>
		</div>
	</div>
	<script>
		var chatHistory = document.getElementById("messageBody");
		chatHistory.scrollTop = chatHistory.scrollHeight;
		let link_conversation_message = document.querySelectorAll("#linkMessageUser");
		let box_conversation_message = document.querySelectorAll("#mes-box");
		let i = 0;
		for (i = 0; i < link_conversation_message.length; i++) {
			link_conversation_message[i].addEventListener("click", () => {
				box_conversation_message.style.diplay = "none";
			});
		}
	</script>
	<script>
		let frmu = document.getElementById("frm");
		frmu.submit.addEventListener("click", (e) => {
			if (frmu.message.value == "") {
				e.preventDefault();
				alert("Impossible d'envyer un merssage vide \n Ecrivez quelque chose et reesayez svp");
			}
		});

		


		function show_user() {
			let a = document.querySelector("#mes-box");
			let b = document.querySelector("#bu");
			a.style.display = "none";
			b.style.display = "block";
		}

		function show_covers() {
			let a = document.querySelector("#mes-box");
			let b = document.querySelector("#bu");
			a.style.display = "block";
			b.style.display = "none";
		}

		function delmes() {
			let btn_del = document.getElementById("btn-del");
			btn_del.style.visibility = "visible";
		}
	</script>
</body>

</html>