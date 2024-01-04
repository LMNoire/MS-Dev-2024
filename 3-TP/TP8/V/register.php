<?php
?><!DOCTYPE html>
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

    
<form method="post" action="../C/createUser.action.php" name="form" id="formContact">
   
    <h1>Inscription</h1>

    <div class="inscription">
    
        <input type="text" class="profil" name="name" placeholder="Nom" required>
      
        <input type="text" class="profil" name="firstname" placeholder="Prénom" required>

        <input type="email" class="profil" name="mail"  placeholder="Mail" required>
      
        <input type="tel" class="profil" name="tel" placeholder="Téléphone" required>

        <input type="password" class="profil" name="password" placeholder="Password" required>
        
        <input type="password" class="profil" placeholder="Confirmer Password" required>
    </div>  
<p class= sengager>S'engager ?</p>


  
<input type="image" src="../V/assets/sceau.png"  class="sceau" value =" "/>   


</form>




</body>
</html>