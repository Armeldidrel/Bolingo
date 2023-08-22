<?php 
    session_start();
    if(!isset( $_SESSION['id_session'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="Capturbe.PNG">
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Ajoutez ici votre style pour le header et la navigation */
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;

        }


        .logo {
            display: block;
            margin: 0 auto;
            width: 250px;
            margin-top: 0%;
            height: 150px;
        }

        header {
            background-color: #50280E;
            padding: 10px;
            text-align: center;
            max-width: 100%;
        }


        nav {
            padding: 10px 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        li {
            margin-right: 12px;
            position: relative;

        }

        a {
            text-decoration: none;
            color: #e0407b;
            padding: 5px 10px;
            font-size: 20px;
            transition: 0.40s ease;
            opacity: 0.90;

        }

        a:hover {
            color: #ffffff;
            padding: 10px 15px;
            opacity: 1.5;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }


        #bgcon {
            position: absolute;
            left: 0px;
            top: 0px;
        }

        .annime {
            animation: myAnim 0.90s ease 0s 1 reverse both;
        }

        @keyframes myAnim {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.2;
            }

            100% {
                opacity: 1;
            }
        }

        header p {
            animation: pan 15s infinite;
            position: absolute;
            left: 0px;
            top: 140px;
            color: #FFCADC;
            opacity: 0.70;
        }

        @keyframes pan {
            0% {
                left: 0px;
            }

            85% {
                opacity: 0;
                left: 48%;
            }

        }

        .badge {
            position: absolute;
            top: -6px;
            right: -8.5px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #e13272;
            color: white;
            font-size: 12px;
            padding: 2px 5px;
        }

        .active,
        a:hover {
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }
            
            .topnav a.icon {
                float: right;
                display: block;
            }
            .container{
                margin-letf:30px;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
        li{
            list-style: none;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header class="annime">
        <!-- Ajoutez ici votre contenu pour le header -->
        <img src="Capturne.PNG" alt="" class="logo ">
        <img src="bgcon.png" alt="" width="323px" id="bgcon">
        <p>🤍Rencontrez des célibataires congolais
            passionnants et
            trouvez l'amour au cœur du Congo!🤍</p>

        <nav>
            <!-- Ajoutez ici votre liste d'onglets -->
            <!-- <ul class=".topnav" id="myDIV">
                <li><a href="amis.html" class="btn active"><span class="icon-nav">👩🏿‍❤️‍👩🏻</span> Amis<span class="badge"> </span></a></li>
                <li><a href="recherche.html" class="btn "><span class="icon-nav">🔍</span> Recherche</a></li> -->
                <li><a href="message.php" class="btn "><span class="icon-nav">💬</span> Messages</a></li>
                <li><a href="Profile.php?" class="btn "><span class="icon-nav">👤</span> Profil</a></li>
                <!-- <li><a href="notification.php" class="btn "><span class="icon-nav">🔔</span> Notifications<span class="badge">30</span></a></li> -->
                <li><a href="deconnexion.php" class="btn "><span class="icon-nav">🔕</span> Déconnexion</a></li>
                <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a></li>
            </ul>
        </nav>
    </header>




</body>
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }

    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

</html>


<!--
    LIKE 
    <script>
    let i = document.querySelector("h1");
    i.addEventListener('click', () => {
      if (i.textContent === "🤍") {
        i.textContent = "❤️";
      } else {
        i.textContent = "🤍";
      }
    });
  </script> -->