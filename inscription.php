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

        body {
            width: 100%;
            height: 100vh;
            background-color: #50280E;

        }

        .cont {

            background-position: center;
            font-family: Arial, sans-serif;
            display: grid;
            place-items: center;
            height: 100vh;
            /* background-color: #FFABA0; */
            background-color: #50280E;
            /* display: flex;
      align-items: center;
      justify-content: right;
      padding-right:10% ;
      padding-top:5% ; */

            -webkit-animation-name: slideInDown;
            animation-name: slideInDown;
            -webkit-animation-duration: 3s;
            animation-duration: 2.5s;
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

        /* .container {
      max-width: 400px;
      height: 500px;
      padding: 20px;
      background-color:#f0eeee;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      overflow: auto;
      opacity: 0.95;
    } */



        .logo {
            display: block;
            margin: 0 auto;
            width: 250px;
            margin-top: 0%;
            height: 150px;
        }

        .h11 {
            text-align: center;
            color: #ff4081;
            margin-top: -10px;
        }

        label {
            margin-top: 10px;
            color: #ffffff;
        }



        input[type="submit"] {
            background-color: #ff4081;

        }

        input[type="submit"]:hover {
            background-color: #e0407b;
        }

        p {
            color: #777777;
            font-size: 12px;
        }

        a {
            color: #ff4081;
            text-decoration: none;
        }

        .champ {
            margin-left: 30px;
        }

        a:hover {
            text-decoration: underline;
        }


        #error-pass-matching {
            color: rgb(79, 0, 0);
        }

        .form-control {
            border-radius: 25px;
        }

        .form-control {
            display: block;
            width: 100%;
            background: #e6e6e6;
            font-family: Montserrat-Bold;
            font-size: 15px;
            line-height: 1.5;
            color: #666;
        }

        .frmcont {
            width: 500px;
            margin-top: -30px;
        }

        .pp {
            width: 130px;
            height: 130px;
        }
        .pcx{
            margin-top: -10px;
            visibility: hidden;

        }
        @media screen and (max-width:767px) {
            .pcx{
                position: absolute;
                top:47%;
                visibility: initial;

            }
            html,
            .cont,
            body {
                overflow: hidden;
            }

            .frmcont {
                width: 300px;
            }
        }

        #pp {
            visibility: hidden;
        }
    </style>
    <title>Rencontrez des célibataires congolais <br>passionnants et <br>trouvez l'amour au cœur du Congo!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" defer></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="">

    <div class="cont d-flex flex-column align-items-center justify-content-center ">

        <img src="Capturne.PNG" alt="" class="logo">

        <h1 class="h11">INSCRIPTION</h1>

        <div class="frmcont w-30 p-3">
            <form action="traitement_inscription.php" method="post" enctype="multipart/form-data">

                <div class="text-center">
                    <label for="pp">
                        <div class="rounded-circle overflow-hidden pp">

                            <img src="Phot_de_profile/Default_pp.webp" alt="" width="100%" height="100%">
                            


                        </div>
                    </label>
                    
                    <input type="file" name="photo_profile" id="pp" class="form-control ">
                </div>
                <label for="pp" class="text-center pcx" >Ajouter une photo de profile</label>
                <div class="mb-2">
                    <input type="email" name="email" id="" class="form-control" placeholder="Entrez votre email" required>
                </div>
                <div class="mb-2">
                    <input type="text" name="nom" id="" class="form-control" placeholder="Entrez votre nom" required>
                </div>
                <div class="mb-2">
                    <input type="text" name="prenom" id="" class="form-control" placeholder="Entrez votre prenom" required>
                </div>
                <div class="mb-2">
                    <input type="password" name="password" id="" class="form-control"
                        placeholder="Entrez un mot de passe " required>
                </div>
                <div class="mb-2">
                    <input type="password" name="password_comf" id="" class="form-control"
                        placeholder="Comfirmer le mot de passe " required>
                </div>
                <div class="mb-2 ">
                    <p id="error-pass-matching"></p>
                </div>
                <div class="mb-2 " class="alert alert-danger" role="alert">
                    <p id="error-pass-matching2"></p>
                </div>
                <div class="mb-2 text-center">
                    <input class="btn text-light " type="submit" value="S'inscrire" id="sub">
                </div>
                <div class=" text-center"><a href="index.php" >J'ai déja un compte</a></div>
                
                
            </form>
        </div>
    </div>


    <script>
        let formulaire = document.querySelector("form");
        let error_print = document.querySelector("#error-pass-matching");
        let error_print2 = document.querySelector("#error-pass-matching2");
        let sub = document.querySelector("#sub");


        sub.addEventListener('click', (e) => {
            if(formulaire.nom.value==""||formulaire.prenom.value==""||formulaire.email.value=="" || formulaire.password.value==""||formulaire.password.value =="" ){
                e.preventDefault();
                error_print2.style.color = "red";
                error_print2.textContent = "❌Vous devez remplir tout les champs";  
            }else{
                error_print2.style.color = "green";
                error_print2.textContent = "";
                if (formulaire.password.value != formulaire.password_comf.value) {
                e.preventDefault();
                error_print.style.color = "red";
                error_print.textContent = "❌Les mot de passe doivent correspondre";
            } else {
                error_print.style.color = "green";
                error_print.textContent = "✅Mot de passe cree avec succe !";

            }
            }
          
           
        })



    </script>


</body>

</html>