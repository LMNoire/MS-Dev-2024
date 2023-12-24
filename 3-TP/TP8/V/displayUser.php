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
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1> DashBoard <a href="../C/logoutUser.action.php">Déconnexion</a></h1>
        <!-- Premier tableau user -->
        <div>
            <h1>Liste Complète des utilisateurs</h1>
            <table border = 1 >
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Dette</th>
                    <th>Action</th>
                </tr>
                        <?php foreach($_SESSION["tab_user"] as $user){ ?>
                <tr>
                    <td>
                        <?php echo $user["Nom"]; ?>
                    </td>    
                    <td>
                        <?php echo $user["Prenom"]; ?>
                    </td>
                    <td>
                        <?php echo $user["total_debt"]; ?>
                    </td>
                    <td>
                        <form action="../C/readContrevenant.action.php" method= "POST">
                            <input type="hidden" name="nom" value="<?php echo $user["Nom"];?>"/>
                            <button type="submit">Sanctionner</button>
                        </form>
                        <form action="../C/updateOffence.action.php" method= "POST">
                            <input type="hidden" name="nom" value="<?php echo $user["Nom"];?>"/>
                            <button type="submit">Dette Réglée</button>
                        </form>
                        <?php };?>
                    </td>   
                </tr>
            </table>
            <!-- Deuxième tableau user pour le top des dénonciateurs -->
            <h2>Top 10 des Dénonciateurs</h2>
            <table border =1>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Quantité</th>
                </tr>
                </tr>
                <?php for ($i=0; $i < sizeof($_SESSION["tab_user"]) ; $i++) { 
                            ($denonciateur = $_SESSION["topDenonciation"][$i])?>         
                <tr>
                    <td>
                        <?php echo $denonciateur["Nom"]; ?>
                    </td>    
                    <td>
                        <?php echo $denonciateur["Prenom"]; ?>
                    </td>
                    <td>
                        <?php echo $denonciateur["cpt_denonciations"]; ?>
                    </td>
                        <?php 
                        if ($i == 10){
                            break;
                    }};?>
                </tr>
            </table>
            <!-- Troisième tableu user pour le top des contrevenants -->
            <h2>Top 10 des Contrevenants</h2>
            <table border =1>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Quantité</th>
                </tr>
                </tr>
                    <?php for ($i=0; $i < sizeof($_SESSION["tab_user"]) ; $i++) { 
                            ($contrevenant = $_SESSION["topContrevenant"][$i])?>         
                <tr>
                    <td>
                        <?php echo $contrevenant["Nom"]; ?>
                    </td>    
                    <td>
                        <?php echo $contrevenant["Prenom"]; ?>
                    </td>
                    <td>
                        <?php echo $contrevenant["cpt_casier"]; ?>
                    </td>
                        <?php 
                        if ($i == 10){
                            break;
                    }};?>
                </tr>
            </table>
        </div>
    </body>
</html>