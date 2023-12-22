<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="button.css">
    <title>Boite à Jurons</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Mot de Passe Oublié</h1>

    <form method="post" action="../C/sendPasswordReset.action.php">
        
        <label for="email">email</label>
        <input type="email" name="email" id="email">

        <button>Envoyer</button>

    </form>

</body>
</html>    