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
    .cont {
     
      background-position: center;
      font-family: Arial, sans-serif;
      display: grid;
      place-items: center;
      height: 100vh;
      /* background-color: #FFABA0; */
      background-color:#50280E;
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
    .inter-centre {

      margin-bottom: 10px;
    }

    

    .ct{
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-around;
    }
    .logo {
      display: block;
      margin: 0 auto;
      width: 250px;
      margin-top: 0%;
      height: 150px;
    }

    h1 {
      text-align: center;
      color: #ff4081;
      margin-top: 0px;
    }

    label {
      margin-top: 10px;
      color: #ffffff;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    select,
    textarea {
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
      margin-left: 30%;
      width: 300px;

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
    .champ{
      margin-left: 30px;
    }
    a:hover {
      text-decoration: underline;
    }

    .form-cont{
      display: grid;
      grid-template-columns: repeat(4, 250px);
      gap: 20;


    }
    #error-pass-matching{
      color: rgb(79, 0, 0);
    }

   
  </style>
  <title>Rencontrez des célibataires congolais <br>passionnants  et <br>trouvez l'amour au cœur du Congo!</title>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="cont">
  
  <img src="Capturne.PNG" alt="" class="logo">

  <h1>INSCRIPTION</h1>
  <!-- <div class="container"> -->
  <form action="traitement_inscription.php" method="post" enctype="multipart/form-data">


   
    <div class="form-cont">
      <div class="champ">
        <label for="pseudonyme">* Pseudonyme :</label>
        <input type="text" id="pseudonyme" name="pseudonyme" ><br><br>
      </div>
  
  
      <div class="champ">
        <label for="prenom">* Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
      </div>
      <div class="champ">
  
        <label for="nom">* Nom :</label>
        <input type="text" id="nom" name="nom" reqired><br><br>
      </div>
  
      <div class="champ">
        <label for="genre">* Genre </label>
        <select id="genre" name="genre" >
          <option value="homme">Homme 🤵🏽‍♀️</option>
          <option value="femme">Femme 👰🏽‍♀️</option>
        </select><br><br>
      </div>
  
  
      <div class="champ">
        <label for="prof">Profession :</label>
        <select id="prof" name="profession" >
          <option value="">Sélectionnez une profession</option>
          <option value="étudiant">Étudiant</option>
          <option value="élève">Élève</option>
          <option value="chômeur">Chômeur</option>
          <option value="chauffeur">Chauffeur</option>
          <option value="cuisinier">Cuisinier</option>
          <option value="enseignant">Enseignant</option>
          <option value="infirmier">Infirmier/Infirmière</option>
          <option value="médecin">Médecin</option>
          <option value="avocat">Avocat</option>
          <option value="journaliste">Journaliste</option>
          <option value="ingénieur">Ingénieur</option>
          <option value="artiste">Artiste</option>
          <option value="commerçant">Commerçant</option>
          <option value="agriculteur">Agriculteur</option>
          <option value="ouvrier">Ouvrier</option>
          <option value="informaticien">Informaticien</option>
          <option value="banquier">Banquier</option>
          <option value="architecte">Architecte</option>
          <option value="policier">Policier</option>
          <option value="militaire">Militaire</option>
          <option value="étudiant">Autre</option>
        </select><br><br>
  
      </div>
  
      <!--********************************************************************** -->
      <!---********************************************************************** -->
      
     
      <!---********************************************************************** -->
      <!---********************************************************************** -->
  
      <div class="champ">
        <label for="taille">Taille (en centimètres) :</label><br>
        <input type="number" id="taille" name="taille" ><br><br>
  
      </div>
      <div class="champ">
        <label for="poids">Poids (en kilogrammes) :</label><br>
        <input type="number" id="poids" name="poids" ><br><br>
      </div>
      <div class="champ">
        <label for="couleurPeau">Couleur de peau :</label>
        <select id="couleurPeau" name="couleurPeau" >
          <option value="claire">Claire</option>
          <option value="moyenne">Moyenne</option>
          <option value="foncée">Foncée</option>
        </select><br><br>
      </div>
      <div class="champ">
        <label for="email">Adresse email :</label>
        <input type="email" id="email" name="email" required><br><br>
      </div>
      <div class="champ">
      <label for="telephone">Numéro de téléphone :</label>
      <input type="tel" id="telephone" name="telephone" ><br><br>
      </div>
      <div class="champ">
      <label for="dateNaissance">Date de naissance :</label><br>
      <input type="date" id="dateNaissance" name="dateNaissance" ><br><br>
    </div>
    <div class="champ">
      <label for="ville">* Dans quelle ville habitez-vous ?</label>
      <select id="ville" name="ville" required>
        <option value="Brazzaville">Brazzaville</option>
        <option value="Pointe-Noire">Pointe-Noire</option>
        <option value="Dolisie">Dolisie</option>
        <option value="Nkayi">Nkayi</option>
        <option value="Impfondo">Impfondo</option>
        <option value="Madingou">Madingou</option>
        <option value="Owando">Owando</option>
        <option value="Sibiti">Sibiti</option>
        <option value="Mossendjo">Mossendjo</option>
        <option value="Kinkala">Kinkala</option>
        <option value="Gamboma">Gamboma</option>
        <option value="Ewo">Ewo</option>
        <option value="Ouesso">Ouesso</option>
        <option value="Loandjili">Loandjili</option>
        <option value="Kayes">Kayes</option>
        <option value="Ouésso">Ouésso</option>
        <option value="Makoua">Makoua</option>
        <option value="Mossaka">Mossaka</option>
        <option value="Loutété">Loutété</option>
        <option value="Sibiti">Sibiti</option>
        <option value="Mossendjo">Mossendjo</option>
        <option value="Kinkala">Kinkala</option>
        <option value="Gamboma">Gamboma</option>
        <option value="Boko">Boko</option>
        <option value="Ouesso">Ouesso</option>
        <option value="Nkayi">Nkayi</option>
        <option value="Dolisie">Dolisie</option>
        <option value="Madingou">Madingou</option>
        <option value="Impfondo">Impfondo</option>
        <option value="Owando">Owando</option>
        <option value="Bétou">Bétou</option>
        <option value="Loubomo">Loubomo</option>
        <option value="Sibiti">Sibiti</option>
        <option value="Ewo">Ewo</option>
        <option value="Kayes">Kayes</option>
        <option value="Sembe">Sembe</option>
        <option value="Boundji">Boundji</option>
        <option value="Makoua">Makoua</option>
        <option value="Mossaka">Mossaka</option>
        <option value="Lékana">Lékana</option>
        <option value="Mossendjo">Mossendjo</option>
        <option value="Kinkala">Kinkala</option>
        <option value="Gamboma">Gamboma</option>
        <option value="Sibiti">Sibiti</option>
        <option value="Makabana">Makabana</option>
        <option value="Ouesso">Ouesso</option>
        <option value="Kibangou">Kibangou</option>
      </select>
    </div>
    <div class="champ">
      <label for="pass1">* Cree un mot de passe </label>
      <input type="password" name="password" id="pass1">
    </div>
    <div class="champ">
      <label for="pass2">* Comfirmer le mot de passe </label>
      <input type="password" name="password_comf" id="pass2">
    </div>
    <div class="champ">
      <span id="error-pass-matching"></span>
    </div>
    <div class="champ">
      <label for="pp"><img src="https://static.vecteezy.com/system/resources/thumbnails/009/734/564/small/default-avatar-profile-icon-of-social-media-user-vector.jpg" width="50px"></label>
        <input type="file" name="photo_profile" id="pp" style="visibilgity:hidden; margin-top:10px">
    </div>
    </div>

    <div class="champ ct ">
    <label>Centres d'intérêt :</label><br><br>
    <input type="checkbox" id="sport" name="interets[]" value="sport">
    <label for="sport">Sport🚴‍♀️</label>

    <input type="checkbox" id="lecture" name="interets[]" value="lecture">
    <label for="lecture">Lecture</label>

    <input type="checkbox" id="musique" name="interets[]" value="musique">
    <label for="musique">Musique🎼</label>

    <input type="checkbox" id="fete" name="interets[]" value="fete">
    <label for="fete">Fêtes</label>
    <input type="checkbox" id="cinema" name="interets[]" value="cinema">
    <label for="cinema">Cinéma</label>

    <input type="checkbox" id="voyage" name="interets[]" value="voyage">
    <label for="voyage">Voyage</label>

    <input type="checkbox" id="art" name="interets[]" value="art">
    <label for="art">Art</label>

    <input type="checkbox" id="danse" name="interets[]" value="danse">
    <label for="danse">Danse💃</label>
  </div>
  <br>
  
  <div class="champ">
    <label for="description">Faite un resume de vous , et de ce que vous recherchez </label><br>
    <textarea id="description" name="description"  rows="5" cols="10"></textarea><br>
  </div>
  <div class="champ">
    <input type="checkbox" name="Accepter" id="Condition" required >
    <label for="Condition"> j'accepte toutes <a href="#condtion.html">les conditions</a></label>
  </div>
    
    <p>Note : Toutes les informations fournies seront traitées de manière confidentielle et ne seront utilisées que dans
      le but de faciliter les rencontres sur le site.</p>

    <input type="submit" value="S'inscrire" id="sub">



  </form>
</div>


  <script>
    let formulaire = document.querySelector("form");
    let error_print = document.querySelector("#error-pass-matching");
    let sub = document.querySelector("#sub");
    

    sub.addEventListener('click',(e)=>{
     

      console.log(formulaire.password.value);
      console.log(formulaire.password_comf.value);

      if(formulaire.password.value!=formulaire.password_comf.value){
        e.preventDefault();
        error_print.style.color="red";
        error_print.textContent="❌Les mot de passe doivent correspondre";     
      }else{
        error_print.style.color="green";
        error_print.textContent="✅Mot de passe cree avec succe !";  

      }
    })
      


  </script>


</body>

</html>
