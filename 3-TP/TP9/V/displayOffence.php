<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="displayOffence.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">   
</head>
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

<body>
    <div class="display-offence">
      <div class="overlap-group-wrapper">
        <div class="overlap-group">
          <img class="red-cloth-banner" src="assets/header.png" />
          <div class="text-wrapper">La liste des méfaits</div>
          <img class="ejv" src="assets/scroll.png" />
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
                              <td><?php echo $info["Montant"]. " €"; ?></td>
                              <td><?php echo $info["Date"]; ?></td>
                              <td><?php 
                              if ($info["Status"]==0) {
                                echo "A régler";
                              }
                              elseif ($info["Status"]==1) {
                                echo "Dette réglée";
                              }
                              ?></td>
                          <?php } ?>
                          </tr>
                
                  
                      </table>
                      <a href="../C/readUser.action.php">Retour au DashBoard</a>
          <img class="element" src="assets/shield.png" />
          <img class="img" src="assets/shield.png" />

        <a href="../V/settingUser.php" class="modify">Modifier Profil</a>
        <a href="../C/logoutUser.action.php" class="logout">Déconnexion</a>
        </div>
      </div>
    </div>
  
  </body>

</html>