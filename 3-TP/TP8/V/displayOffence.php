<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des méfaits</title>
</head>
<body>
<?php 
//Start session
    session_start();
    if($_SESSION["autoriser"]!="oui"){
        header("Location: index.php");
        exit();
    }

?>
<H1>Liste des Méfaits</H1>
<table border = 1>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Libelle</th>
        <th>Montant</th>
        <th>Date</th>
        <th>Status</th>
    </tr>
    
        <?php foreach ($_SESSION["tab_offence"] as $info) { ?>
            <tr>
                <td><?php echo $info["Nom"]; ?></td>
                <td><?php echo $info["Prenom"]; ?></td>
                <td><?php echo $info["Libelle"]; ?></td>
                <td><?php echo $info["Montant"]; ?></td>
                <td><?php echo $info["Date"]; ?></td>
                <td><?php echo $info["Status"]; ?></td>
            <?php } ?>
            </tr>
   
    
</table>

<a href="../C/readUser.action.php">Retour au DashBoard</a>
</body>
</html>