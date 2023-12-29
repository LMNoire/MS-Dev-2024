<?php
    /**
     * @author Selim.C <selim.coulombel@live.fr>
     */
    session_start();
    if ($_SESSION["autoriser"] != "oui") {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Châtier un utilisateur</title>
    <link rel="stylesheet" href="addOffence.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">   
</head>

<body>

<div class="container">
        <!--Formulaire-->
        <form action="../C/createOffence.action.php" id="offenceForm" method="post">
<!--Div principale-->
<div class="topContainer">

        <!--Contrevenant (champs préremplis)-->
        <div class="card" id="contrevenant">
            <!-- Use PHP to echo the contrevenant value from the session -->
            <p>Nom du contrevenant</p>
            <input type="text" name="contrevenant_nom" value="<?php echo $_SESSION['nomContrevenant'];?>" readonly>
            <p>Prenom du contrevenant</p>
            <input type="text" name="contrevenant_prenom" value="<?php echo $_SESSION['prenomContrevenant'];?>" readonly>
        </div>
        <!--Selectionner infraction-->
        <div class="card" id="infrac">
            <p>Infraction</p>
            <select name="infraction" method="post">
                <option value="1">Petite injure</option>
                <option value="2">Grosse injure</option>
                <option value="3">Comportement violent</option>
                <option value="4">Comportement inadapté</option>
                <option value="5">Retard</option>
            </select>
        </div>
</div>

<div class="botContainer">
        <!--Confirmer mot de passe-->
        <div class="card" id="confPass">
            <label for="confirmPass"><b>Mot de passe</b></label>
            <input type="password" placeholder="Tapez votre mot de passe" name="password" id="password" required>
        </div>
        <!--Valider le chatiment-->
        <div class="card" id="validChat">
            <button type="submit" class="chatier">Valider le châtiment</button>
        </div>
    </form>

</div>
</div>

</body>

</html>