<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* lml */
        header {
            padding: 10px;
            text-align: center;
            max-width:fit-content;
            position: fixed;
            top: 80px;
            right: 80px;
            z-index: 1;
        }

        header #nav {
            position: fixed;
            top: 95px;
            left: 300px;
            width: 100%;
            display: block;
            transition: top 0.3s;
        }

        header ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        header li {
            margin-right: 12px;
        }

        header a {
            text-decoration: none;
            color: #ffffffba;
            padding: 5px 10px;
            font-size: 20px;
            transition: 0.40s ease;
            opacity: 0.90;
        }

        header a:hover {
            color: #ff4080c5;
            padding: 6px 11px;
            opacity: 1.5;
        }

        /* Styles pour la version responsive */

        @media screen and (max-width: 600px) {
            header {
                position: static;
                top: auto;
                right: auto;
                text-align: left;
                padding: 0;
            }

            header ul {
                flex-wrap: wrap;
            }

            header li {
                margin-right: 0;
                margin-bottom: 10px;
            }

            header a {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav id="nav">
            <!-- Ajoutez ici votre liste d'onglets -->
            <ul>
                <li><a href="connexion.html"><span class="icon-nav">🔒</span> Connexion</a></li>
                <li><a href="inscription.php"><span class="icon-nav">📝</span> Inscription</a></li>
                <li><a href="testi/temoignage.html"><span class="icon-nav">📣</span> Témoignage</a></li>
                <!-- <li><a href="#"><span class="icon-nav">❓</span> À Propos</a></li> -->
            </ul>
        </nav>
    </header>
    <!-- <script>
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("nav").style.top = "50px";
            document.getElementById("nav").style.left = "250px";
          } else {
            document.getElementById("nav").style.top = "-50px";
          }
        }
        </script> -->
</body>

</html>