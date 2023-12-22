<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Réinitialiser mot de passe</title>
    <link rel="stylesheet" href="resetPasswordSS.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
</head>

<body>
    <div class="box">
    <h2>Réinitialiser son mot de passe</h2>
    <form method="post" action="../C/resetPassword.action.php" class="formfield">
        <div class="container">
            <label for="email"><b>Email</b></label><br>
            <input type="email" placeholder="Entrez votre email" name="email" required>
            <br>
            <label for="pswd"><b>Nouveau mot de passe</b></label><br>
            <input type="pswd" placeholder="Votre nouveau mot de passe" name="newPass" required>
            <br>
            <label for="pswd"><b>Confirmer mot de passe</b></label><br>
            <input type="pswd" placeholder="Confirmer votre mot de passe" name="confirmPass" required>
            <br>
            <button type="submit" class="button">Réinitialiser</button>
        </div>
    </form>
    </div>
    <div class="candle">
        <img class="candlePic" src="assets/candle.png"> 
    </div>
</body>
</html>