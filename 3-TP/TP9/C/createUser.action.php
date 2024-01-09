<?php
include "../M/User.class.php";
include "../M/DbManagement.class.php";

$name = $_POST['name'];
$firstname = $_POST['firstname'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$password = $_POST['password'];
$hashpassword = password_hash($password, PASSWORD_DEFAULT);
$adresse = $_POST['adresse'];
$codepostal = $_POST['codepostal'];
$ville = $_POST['ville'];

// $name = 'name';
// $firstname = 'firstname';
// $mail = 'mail';
// $tel = 'tel';
// $password = 'password';
// $hashpassword = password_hash($password, PASSWORD_DEFAULT);

$user = new User ($name, $firstname, $mail, $tel, $hashpassword, $adresse, $codepostal, $ville);

if (empty($name) || empty($firstname) || empty($mail) || empty($tel) || empty($password) || empty($adresse) || empty($codepostal) || empty($ville)) {
    echo  'Tous les champs doivent être complétés !';
}

elseif (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
    echo "Votre adresse mail n'est pas valide !";
}

elseif (mb_strlen($password) < 6) {
    echo  'Votre mot de passe doit faire au moins 6 caractères !';
}

elseif ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    echo 'Votre mot de passe doit contenir au moins 1 lettre';
} 

elseif ( ! preg_match("/[0-9]/", $_POST["password"])) {
    echo 'Votre mot de passe doit contenir au moins 1 chiffre';
} 

elseif(!DbManagement::verifyMail($mail)) {
    echo 'Adresse mail déjà utilisé';
} 

elseif (trim($_POST['name'])&&trim($_POST['firstname'])&&trim($_POST['mail'])&&trim($_POST['tel'])&&trim($_POST['password'])&&trim($_POST['adresse'])&&trim($_POST['codepostal'])&&trim($_POST['ville']) ==!NULL ) {
    DbManagement::createUser($user);
    $res = array(
        'name' => $name, 
        'firstname' => $firstname, 
        'mail' => $mail, 
        'tel' => $tel, 
        'password' => $password,
        'adresse' => $adresse,
        'codepostal' => $codepostal,
        'ville' => $ville
        // 'status' => true
        );
    }
else {
    $res = array('status' => false);
}

echo json_encode($res);

?>
 