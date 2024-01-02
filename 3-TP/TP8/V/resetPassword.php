<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="resetPasswordSS.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
</head>
<body>

<div class="box">
    <h1>Réinitialiser mot de passe</h1>

    <form method="post" action="../C/processResetPassword.action.php">

        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
    <div class="container">
        <label for="email">Email</label>
        <input class="input" type="email" id="email" name="email"><br><br>

        <label for="password">Nouveau mot de passe</label>
        <input class="input" type="password" id="password" name="password"><br><br>

        <label for="password_confirmation">Répeter mot de passe</label>
        <input class="input" type="password" id="password_confirmation"
               name="password_confirmation"><br><br>

        <button class="button">Envoyer</button>
    </div>
    </form>
</div>

<div class="candle">
        <img class="candlePic" src="assets/candle.png"> 
</div>


</body>
</html>

