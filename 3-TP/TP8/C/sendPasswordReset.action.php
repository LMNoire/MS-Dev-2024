<?php
include "../M/DbManagement.class.php";
include "../M/Mail.class.php";

$email = $_POST["email"];
// $token = bin2hex(random_bytes(16));
// $token_hash = hash("sha256", $token);
// $expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$token = DbManagement::createResetTokenHash($email);

$mail->setFrom("noreply@example.com");
$mail->addAddress($email);
$mail->Subject = "Password Reset";
$mail->Body = <<<END

Click <a href="http://localhost/gardiens/C/resetPassword.action.php?token=$token">here<a/>
to reset your password

END;

try {
    $mail->send();
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Error Mail: {$mail->ErrorInfo}";
}


echo "Un email a été envoyé, consultez votre boite mail.";