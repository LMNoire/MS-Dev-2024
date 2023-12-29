<?php session_start() /** @author  farid  mekentichifa@gmailcom */  ;?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="settingUser.css">
</head>
    <body>
<h1> Modification Profil  </h1><br>
<form class= "update" action="../C/updateUser.action.php" method="POST">
            <table border = 1>
                <td>
                    <select name = "ID" placeholder = "ID">
                        <option value ="">Select an ID</option>
                        <?php foreach ($_SESSION ["tab_user"] as $user) :?> 
                            <option value="<?php echo $user ["ID_Users"] ?>">
                                <?php echo $user ["ID_Users"] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </td>
                <tr>
                <td>Nom : 
                    <input type="radio" id="nom" name=colunn value = nom>
                </td>
                </tr>
                <tr>
                <td>Prenom :
                    <input type = "radio" id="prenom" name=colunn value = prenom>
                </td>
                </tr>
                <tr>
                <td>Téléphone :
                    <input type = "radio" id="tel" name =colunn value = tel>
                </td>
                </tr>
                <tr>
                <td>mail :
                    <input type = "radio" id="mail"  name =colunn value = mail>
                </td>
                </tr>
                <tr>
                    <td>
                        <input name="info" type="text" placeholder="Insert Information">
                        <input type="submit" value="Update user"/>
                    </td>
            </table> 
        </form>
    </body>
    