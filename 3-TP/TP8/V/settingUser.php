<?php  /** @author  farid  mekentichifa@gmailcom */  
   session_start();
    if($_SESSION["autoriser"]!="oui"){
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification Profil</title>
    <link rel="stylesheet" href="settinguser.css">

</head>
    <body>


<form class= "update" action="../C/updateUser.action.php" method="POST">
 <h1> Modification Profil  </h1>
 <div class="background-container">
        <div class="background-image"></div>
    </div>



 <table class=table border = 0>
          
    <td class="modification">                   
                       
       <label for="nom"><input type="text" name="nom" class="modif" value=<?php echo $_SESSION["nom_user"];?>><br /> 

       <label for="prenom"><input class="modif" name="prenom" value=<?php echo $_SESSION["prenom_user"]?>><br /> 
       
       <label for="email"><input  type="mail" name="mail" class="modif" value=<?php echo $_SESSION["mail_user"]?>><br />   
          
       <label for="tel"><input type="tel" name="tel" class="modif" value=<?php echo $_SESSION["tel_user"]?>><br />      
    </td>
        
   
    <p class="valid">valider mes Modifications  ?</p>

    
    <input type="image" src="../V/assets/sceau.jpeg"  class="sceau" value =" "/>   


  </table> 
</form>
</body>