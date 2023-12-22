<?php
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="button.css">
<title>Boite à Jurons</title>
<link rel="stylesheet" href="style.css">

</head>

<body>



<form method="post" action="../C/loginUser.action.php" name="form" id="formContact">
  <div class="subtitle">Connectez-vous!</div>


  <div class="input-container ic2">
    <input name="mail" class="input" type="text" placeholder=" " />
    <label for="mail" class="placeholder">Mail</label>
  </div>


  <div class="input-container ic2">
    <input name="password" class="input" type="text" placeholder=" "/>
    <label for="password" class="placeholder">Mot de Passe</label>
  </div>

  <a href="forgotPassword.php">Mot de Passe oublié?</a>
  <a href="registrer.php">Vous n'êtes pas encore Inscrit ?</a>

  <button type="text" class="submit">Envoyer</button>
</div>
</form>



</body>
</html>