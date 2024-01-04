<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="forgotPassword.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Miss+Fajardose" />
    <title>Mot de passe oublié ?</title>
</head>
<body>
    <span>la Boite à Jurons</span>
    <div>
    <img src="assets/door.png" alt="medievaldoor" class="door">
    <img class=candleNcoins1 src="assets/test.png" alt="Candles and Coins">
    <img class=candleNcoins2 src="assets/test.png" alt="Candles and Coins">
    </div>
    <form  method="post" action="../C/sendPasswordReset.action.php" name="form" id="formContact" class="container">
    <div class="mail"> 
        <input name="email" class="input" type="text" placeholder="E-mail" id="email" />
    </div>
        <button type="text" class="submit">Envoyer mail</button>
    </form>

</body>
</html> 