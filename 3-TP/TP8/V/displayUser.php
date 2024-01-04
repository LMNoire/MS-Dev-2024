<?php
    session_start();
    if($_SESSION["autoriser"]!="oui"){
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="button.css">
        <title>Panneau d'accueil</title>
        <link rel="stylesheet" href="displayUser.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">   
    </head>
    <body>
        
    <!-- Premier tableau user -->
    <div class="display-offence">
    <div class="overlap-group-wrapper">
        <div class="overlap-group">
          <img class="red-cloth-banner" src="assets/header.png" />
          <div class="text-wrapper">Dashboard</div>
          <img class="ejv" src="assets/scroll.png" />
        <div >

        <div class="container">
    <div class="userTitle">
        <h1>Liste Complète des utilisateurs</h1>
    </div>
    
    <div class="userTab">
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Dette</th>
                <th>Action</th>
            </tr>
            
            <?php foreach($_SESSION["tab_user"] as $user): ?>
            <tr>
                <td><?php echo $user["Nom"]; ?></td>
                <td><?php echo $user["Prenom"]; ?></td>
                <td><?php echo $user["total_debt"] . " €"; ?></td>
                <td>
                    <form action="../C/readContrevenant.action.php" method="POST">
                        <input type="hidden" name="nom" value="<?php echo $user["Nom"]; ?>"/>
                        <button type="submit" class="sancBut" style="width: 100px; height: 20px;">Sanctionner</button>
                    </form>
                    <form action="../C/updateOffence.action.php" method="POST">
                        <input type="hidden" name="nom" value="<?php echo $user["Nom"]; ?>"/>
                        <button type="submit" class="detReg" style="width: 100px; height: 20px;">Régler dettes</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <a href="../C/readOffence.action.php"><button type="submit" class="button">Consulter la liste</button></a>
    
</div>
<!-- Deuxième tableau user pour le top des dénonciateurs -->
<div class="container2">
    <div class="snitchTitle">
        <h2>Top 10 des Dénonciateurs</h2>
    </div>
    <div class="snitchTab">
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Quantité</th>
            </tr>
            <?php for ($i = 0; $i < sizeof($_SESSION["tab_user"]); $i++) { 
                ($denonciateur = $_SESSION["topDenonciation"][$i])?>         
                <tr>
                    <td><?php echo $denonciateur["Nom"]; ?></td>    
                    <td><?php echo $denonciateur["Prenom"]; ?></td>
                    <td><?php echo $denonciateur["cpt_denonciations"]; ?></td>
                    <?php 
                    if ($i == 10) {
                        break;
                    }
                }?>
            </tr>
        </table>
    </div>
</div>
<!-- Troisième tableau user pour le top des contrevenants -->
<div class="container3">
    <div class="cTitle">
    <h2>Top 10 des Contrevenants</h2>
    </div>
    <div class="cTab">
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Quantité</th>
            </tr>
            <?php for ($i = 0; $i < sizeof($_SESSION["tab_user"]); $i++) { 
                ($contrevenant = $_SESSION["topContrevenant"][$i])?>         
                <tr>
                    <td><?php echo $contrevenant["Nom"]; ?></td>    
                    <td><?php echo $contrevenant["Prenom"]; ?></td>
                    <td><?php echo $contrevenant["cpt_casier"]; ?></td>
                    <?php 
                    if ($i == 10) {
                        break;
                    }
                }?>
            </tr>
        </table>
    </div>
</div>
           <a href="../V/settingUser.php" class="modify">Modifier Profil</a>
         <a href="../C/logoutUser.action.php" class="logout">Déconnexion</a>
        </div>
      </div>
    </div>
       
    </body>
</html>