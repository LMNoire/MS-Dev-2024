<?php
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="button.css">
<title>Shuffle</title>
<link rel="stylesheet" href="style.css">

</head>

<body>

    
<form method="post" action="../C/createUser.action.php" name="form" id="formContact">
  <div class="title">Créer</div>
  <div class="subtitle">Créeons votre Compte!</div>

  <div class="input-container ic1">
    <input name="name" class="input" type="text" placeholder=" "/>
    <label for="name" class="placeholder">Nom</label>
  </div>

  <div class="input-container ic2">
    <input name="firstname" class="input" type="text" placeholder=" "/>
    <label for="firstname" class="placeholder">Prenom</label>
  </div>

  <div class="input-container ic2">
    <input name="mail" class="input" type="text" placeholder=" "/>
    <label for="mail" class="placeholder">mail</label>
  </div>

  <div class="input-container ic2">
    <input name="tel" class="input" type="text" placeholder=" "/>
    <label for="tel" class="placeholder">tel</label>
  </div>

  <div class="input-container ic2">
    <input name="password" class="input" type="text" placeholder=" "/>
    <label for="password" class="placeholder">Mot De Passe (6 caractères minimum)</label>
  </div>

  <button type="text" class="submit">Envoyer</button>
</div>
</form>
