<?php
/** @author  farid  mekentichifa@gmailcom */
// modifier  mot de passe 



header('Location: ' . $_SERVER['HTTP_REFERER']);// verifier 
exit();

  if (isset($_POST['Submit']) && $_POST['Submit'] == 'Valider') {
    $mail = $_POST['mail'];
    $new_pass = $_POST['new_pass'];
    $pass_old = $_POST['pass_old'];
    $new_pass_conf = $_POST['new_pass_conf'];

    $base = mysql_connect ('localhost', 'root', 'root');
            mysql_select_db ('tuto', $base);

//  récupère ancien mot de passe dans la bdd

$sql = mysql_query("SELECT password FROM users WHERE mail = '" . $address ."'");
list($password) = mysql_fetch_array($sql);

// tu compare si le nouveau passe correspond à l'ancien
if ($new_pass == $new_pass_conf)
{

    //tu vérifie si il sont identique
    if ($password == $pass_old)
    {
        //si oui tu update et encrypte le nouveau mot de passe dans la bdd

        $pass   = $new_pass;  

        $query  = mysql_query("UPDATE users SET password = '. $pass .'  WHERE mail = '". $address ."'");

        echo "Merci, le mot de passe à été changé.";
    }
    else
    {
        echo "Ancien mot de passe non valide";
    }
}
else
{
    echo "Mot de passe de confirmation incorrect, recommencez SVP";
}
}


?>


