<?PHP 
/** @author Jérémy, Farid, Messaoud, Selim */
//Include paths
include "../M/DbManagement.class.php" ;
include "../M/Offence.class.php" ;
include "../M/Mail.class.php";

//Session start
session_start();

//Récupérer penality et users de la BDD
$_SESSION ["tab_penality"] = DBManagement::readPenality();
$_SESSION ["tab_user"] = DBManagement::getAllUsers();

//Récupérer infraction depuis formulaire addOffence
$infraction = $_POST ["infraction"] ;
//Récupérer password depuis formulaire addOffence
$password = $_POST['password'];

//Vérifier si l'utilisateur existe et si le mot de passe est correct
    if (password_verify($password, $_SESSION['denonciateur']->getPassword())) {
        //Instancier new penality
        $penality = new Penality ($_SESSION["tab_penality"][$infraction]["Code_Infraction"],$_SESSION["tab_penality"][$infraction]["Libelle"],$_SESSION["tab_penality"][$infraction]["Montant"]);
        //Si retard calcul du retard à partir du moment ou l'on clique sur le bouton
        if ($_SESSION["tab_penality"][$infraction]["Code_Infraction"] == 5) {
            $dateJ =  strtotime(date("H:i"));
            $dateInit = strtotime(date("8:55"));
            $result =  $dateJ - $dateInit ;
            $result = $result / 60 ;
            $result = $result / 5;
            $result = round($result) * 0.10;
            $penality->setMontant($result);
            $offence = new Offence ($_SESSION['denonciateur'], $penality, $_SESSION['contrevenant']);
            DBManagement::createOffence($offence);
            header ("Location: ../C/readOffence.action.php");
        }else {
            //Instancier new offence
            $offence = new Offence ($_SESSION['denonciateur'], $penality, $_SESSION['contrevenant']);
            //Ajout de l'offence dans la BDD
            DBManagement::createOffence($offence);
            header ("Location: ../C/readOffence.action.php");
        }
        $email = $_SESSION['contrevenant']->getMail();

$mail->setFrom("noreply@example.com");
$mail->addAddress($email);
$mail->Subject = "Vous vous êtes fait châtier";
$mail->Body = <<<END

Tu as été châtié, verbe des Gardiens du juron, et à présent, devant cette sentence implacable, tu es astreint à acquitter le tribut exigé pour expier tes méfaits.
Click <a href="http://localhost/gardiens/V/index.php">here<a/>

Prévot des gardiens;

END;

try {
    $mail->send();
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Error Mail: {$mail->ErrorInfo}";
}

echo "Un email a été envoyé, consultez votre boite mail.";
    }
    
        // Échec de l'authentification            
        else {
            header ("Location: ../V/get1_error.php");
        }
     
