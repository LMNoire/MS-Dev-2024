<?php
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Miss+Fajardose" />
<title>Boite à Jurons</title>
</head>
<body>
  <div class ="decorcontainer">
  <span>la Boite à Jurons</span>
  <img src="assets/door.png" alt="medievaldoor" class="door">
  <img class=candleNcoins1 src="assets/test.png" alt="Candles and Coins">
  <img class=candleNcoins2 src="assets/test.png" alt="Candles and Coins">
  
  <form method="post" action="../C/loginUser.action.php" name="form" id="formContact" class="container">
  <div class="mail"> 
    <input name="mail" class="input" type="text" placeholder="E-mail" required />
  </div>
  <div class="password">
    <input name="password" class="input" type="password" placeholder="Mot de passe" required id="MyInput"/>

    <input class="checkbox" type="checkbox" onclick="myFunction()">
  </div>
    <a class="checkpass" href="forgotPassword.php">Mot de Passe oublié?</a>
    <a class="checkregister" href="register.php">Vous n'êtes pas encore Inscrit ?</a>
  <button type="text" class="submit">Connexion</button>
  </form>
</div> 
</form>
</div>
<script>
      function myFunction() {
    var x = document.getElementById("MyInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  </script>
</body>
</html>
