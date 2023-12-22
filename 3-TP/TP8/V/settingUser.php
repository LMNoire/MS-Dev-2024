<?php  /** @author  farid  mekentichifa@gmailcom */  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="../style.css">
</head>
    <body>
<form action="../C/updateUser.action.php" method="POST">

<span class = "nom">
    <label for="name">Nom</label><br>
    <input type="text" id="nom" name="nom" required/>
    <input type="checkbox" id="nom" name="nom" value=" nom"/><br>

    <br>
 </span>

 <span class = "Prenom">
    <label for="Prenom">Prenom</label><br>
    <input type="text" id="Prenom" name="Prenom" required/>
    <input type="checkbox" id="Prenom" name="Prenom" value=" prenom"/><br>
</span> 

<span class = "mail">
    <label for="mail">Mail </label><br>
    <input type="email" id="mail" name="mail" required/>
    <input type="checkbox" id="mail" name="mail" value="mail "/> <br>
</span> 

<span class = "tel">
    <label for="tel">Téléphone:</label><br>
    <input type="tel" id="tel" name="tel" required/>
    <input type="checkbox" id="tel" name="tel" value=" tel"/><br>
</span> 

<h1> Modification Profil  </h1><br>
<form class= "update" action="../C/updateDBStudents.action.php" method="POST">
            <table border = 1>
                <td>
                    <select name = "ID" placeholder = "ID">
                        <option value ="">Select an ID</option>
                        <?php foreach ($_SESSION ["table_user"] as $user) :?> 
                            <option value="<?php echo $user ["ID"] ?>">
                                <?php echo $user ["ID"] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </td>
                <td>Nom : 
                    <input type="radio" id="nom" name=colunn value = nom/>
                </td> <br>
                <td>Prenom :
                    <input type = "radio" id="prenom" name=colunn value = prenom>
                </td><br>
                <td>Téléphone :
                    <input type = "radio" id="tel" name =colunn value = tel>
                </td><br>
                <td>mail :
                    <input type = "radio" id="mail"  name =colunn value = mail>
                </td><br>
               </tr>
                <tr>
                    <td colspan= "5">
                        <input name="info" type="text" placeholder="Insert Information">
                        <input type="submit" value="Update user"/>
                    </td>
            </table> 
        </form>
    </body>