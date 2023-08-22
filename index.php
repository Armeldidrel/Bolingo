<!DOCTYPE html>
<html>

<head>
  <style>
    * {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
    font-family: Arial, sans-serif;

}

html {
    background-color: #d7caca;
}

 body {
    scroll-behavior: smooth;
    background-color: #592D14;
    overflow: hidden;
} 
.banner {
    overflow: hidden;

    z-index: 2;
    background-color: #592D14;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top;
    font-family: Arial, sans-serif;
    display: flex;
    align-items: center;
    justify-content: right;
    padding-right: 10%;
    padding-top: 5%;
    max-width: 100vw;
    height: 100vh;
    opacity: 0.99;
    transition: 6s ease-in-out;
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: backwards;
    animation-fill-mode: backwards;
}

@-webkit-keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
    }

    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}

@keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
    }

    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}

.container {
    max-width: 350px;
    height: 430px;
    padding: 20px;
    background-color: #3f2f2f;
    border-radius: 5px;
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.921);
    overflow: auto;
    opacity: 0.95;
    display: grid;
    place-items: center;
    transition: 3s ease-in-out;
    -webkit-animation-name: slideInDown;
    animation-name: slideInDown;
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

@-webkit-keyframes slideInDown {
    0% {
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
        visibility: visible;
    }

    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes slideInDown {
    0% {
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
        visibility: visible;
    }

    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}


.logo {
    display: block;
    margin: 0 auto;
    width: 250px;
    margin-top: -15%;
    height: 150px;
}

form  h1 {
    text-align: center;
    color: #ff4081;
    margin-top: -3px;
}

label {
    margin-top: 10px;
    color: #b1b1b1;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 5px;
    border-radius: 3px;
    border: 1px solid #dddddd;
    box-sizing: border-box;
    font-size: 14px;
}

input[type="submit"] {
    background-color: #ff4081;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    margin-left: 30%;
}

input[type="submit"]:hover {
    background-color: #e0407b;
}

p {
    color: #777777;
    font-size: 12px;
    text-align: center;
}

form a {
    color: #ff4081;
    text-decoration: none;
}

form  a:hover {
    text-decoration: underline;
}

.titre {
    color: #ffffff;
    font-size: 35px;
    position: absolute;
    left: 150px;
    top: 250px;
    line-height: 6dvh;
    padding: 10px;
    font-weight: bold;
}

.ts {
    color: #ffcadc;

}

.logo-ban {
    display: block;
    margin: 0 auto;
    width: 350px;
    height: 200px;
    position: absolute;
    top: -13px;
    left: 10px;
}

.temoiniage {
    max-width: 100vw;
    min-height: 100vh;
    display: grid;
    place-items: center;
    animation: myAnim 1s ease 0s 1 normal none;
}
@keyframes myAnim {
0% {
transform: scale(0.5);
}

100% {
transform: scale(1);
}
}
@media screen and (max-width:767px){
    .container{
        margin-left:30px;
    }
    .titre{
        display:none;
    }
}

  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/bootstrap-testimonials.min.css" />
    <link rel="stylesheet" href="connexion.css">
    <title>Formulaire de connexion</title>
    <?php include 'header.php'; ?>
</head>

<body>
   
    <div class="banner" id="banner">

        <img src="Capturne.PNG" alt="" class="logo-ban">

        <p class="titre">Rencontrez des <span class="ts">célibataires </span>congolais <br>passionnants et <br>trouvez
            l'amour au cœur du Congo!</p>
        <div class="container">
            <form action="traitement_connexion.php" method="POST">
                <img src="Capturne.PNG" alt="" class="logo">

                <h1>CONNEXION</h1>
                <br>
                <br>
                <label for="username">Adresse mail :</label>
                <input type="text" id="username" name="username" required>


                <label for="motDePass">Mot de passe :</label>
                <input type="password" name="MotDePass" id="motDePass">
                <br>
                <span id="error-pass-matching" style="color :red"></span> <br>


                <input type="submit"  name="submit" value="Se connecter">
                <br>

                <p>Pas encore inscrit? <a href="inscription.php">Inscrivez-vous ici</a>.</p>


            </form>


        </div>
    </div>

   
      
            <script>
                let banner = document.querySelector(".banner");
                console.log(banner);
                function change_BG(element) {
                    let bc = [, "ff.jpg", "ggg.jpg", "hj.jpg", "rr.jpg"];
                    element.style.backgroundImage = "url(\"ggg.jpg\")";
                    let i = 0;
                    setInterval(() => {
                        if (i == 4) i = 0;
                        i++;
                        element.style.backgroundImage = "url(" + bc[i] + ")";



                    }, 4000);
                }
                change_BG(banner);

            </script>

</body>

</html>