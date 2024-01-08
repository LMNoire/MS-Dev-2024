<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="button.css">
    <title>Inscription</title>
    <link rel="stylesheet" href="register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Mansalva&display=swap" rel="stylesheet">
</head>

<body>

<!--Début formulaire-->
<form>
    <h1>Inscription</h1>
    <div class="inscription">
        <!--Inputs-->
        <input type="text" class="profil" name="name" placeholder="Nom" id="name" required>
        <input type="text" class="profil" name="firstname" placeholder="Prénom" id="firstname" required>
        <input type="email" class="profil" name="mail"  placeholder="Mail" id="mail" required>
        <input type="tel" class="profil" name="tel" placeholder="Téléphone" id="tel" required>
        <input type="text" class="profil" name="adresse" placeholder="Adresse" id="adresse">
        <input type="password" class="profil" name="password" placeholder="Password" id="password" required>
        <input type="password" class="profil" placeholder="Confirmer Password" required>
    </div>  
<p class= sengager>S'engager ?</p>
<!--Bouton validation-->
<input type="image" src="../V/assets/sceau.png"  class="sceau" id="submit" value =" "/>   
</form>

<!--Jquery link-->
<script src="js/jquery-3.3.1.min.js"></script>

</body>
</html>

<script>
$(document).ready(function(){
 
 $("#submit").click(function(e){
     e.preventDefault();

         $.ajax({
         url:"../C/createUser.action.php",
         type:'POST',
         dataType: 'json', //text
         data: {
             name : $("#name").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
             firstname : $("#firstname").val(),
             mail : $("#mail").val(),
             tel : $("#tel").val(),
             password : $("#password").val()
             
         },
         success:function(response) {		
          //var json = $.parseJSON(response);
             console.log(response);
             alert(response.name + response.firstname);
         },
         error:function(response) {
             console.log('error');
             alert("error");

         }
         
     });
 });
});
</script>