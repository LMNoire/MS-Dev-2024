<?php
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="button.css">
<title>Inscription</title>
<link rel="stylesheet" href="register.css">

</head>

<body>

    
<form method="post" action="../C/createUser.action.php" name="form" id="formContact">
    <!-- <div class="title">Créer</div>
    <div class="subtitle">Créeons votre Compte!</div> -->
    <h1>Inscription</h1>

    <div class="inscription">
    
        <input type="text" class="profil" name="name" placeholder="Nom" required>
      
        <input type="text" class="profil" name="firstname" placeholder="Prenom" required>

        <input type="email" class="profil" name="mail"  placeholder="Mail" required>
      
        <input type="tel" class="profil" name="tel" placeholder="Téléphone" required>

        <input type="password" class="profil" name="password" placeholder="password" required>
        
        <input type="password" class="profil" placeholder="Confirmer Password" required>
    </div>  
<p class= sengager>s'engager ?</p>


  
<input type="image" src="../V/assets/sceau.jpeg"  class="sceau" value =" "/>   


</form>




</body>
</html>
