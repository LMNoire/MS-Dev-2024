<?php
/**  @author messaoud.houri@outlook.fr*/

class DbManagement
{
    public static function createUser(User $user){
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "INSERT INTO users (nom, prenom, mail, tel, password) VALUES (?,?,?,?,?)";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$user->getNom(), $user->getPrenom(), $user->getMail(), $user->getTel(), $user->getPassword()]);
    }

    public static function verifyMail($mail): bool {
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "SELECT COUNT(*) FROM users WHERE mail = ?";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$mail]);
        $count = $stmt->fetchColumn();
        return $count === 0;
    }

    public static function getAllUsers() : array{
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $stmt = $bdd->prepare("SELECT * FROM `users`; ");
        $stmt->execute();
        $tabUser = $stmt->fetchAll();
        return $tabUser;
    }


    public static function loginUser($mail, $password):bool{
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "SELECT password FROM users WHERE mail = ? ";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$mail]);
        $hashPassword = $stmt->fetchColumn();

        // Vérifier si l'utilisateur existe et si le mot de passe est correct
        if (password_verify($password, $hashPassword)) {
            echo "Welcome";
            return true; // Utilisateur authentifié
        } else {
            echo "Login ou mot de passe incorrecte";
            return false; // Échec de l'authentification
        }
    }

    public static function createResetTokenHash($mail){
        $token = bin2hex(random_bytes(16));
        $token_hash = hash("sha256", $token);
        $expiry = date("Y-m-d H:i:s", time() + 60 * 30);
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "UPDATE users SET reset_token_hash = ? , reset_token_expires_at = ? WHERE mail = ?";
        $stmt = $bdd->prepare($sql);
        // $stmt->bind_param("sss", $token_hash, $expiry, $mail);
        $stmt->execute([$token_hash, $expiry, $mail]);
        return $token;
    }

    public static function getTokenHash($token):void {

        $token_hash = hash("sha256", $token);
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "SELECT * FROM users WHERE reset_token_hash = ?";
        $stmt = $bdd->prepare($sql);
        // $stmt->bindValue(":token_hash", $token_hash, PDO::PARAM_STR);
        $stmt->execute([$token_hash]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user === false) {
            die("token not found");
         }
    
        if (strtotime($user["reset_token_expires_at"]) <= time()) {
            die("token has expired");
        }
    }   
    
    public static function resetPassword($password, $mail) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "UPDATE users SET Password = ?, reset_token_hash = NULL, reset_token_expires_at = NULL WHERE Mail = ?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$password_hash, $mail]);
    }

    /** @author  farid  mekentichifa@gmailcom */

    //modifier champs nom
    public static function updateUserNom($id, $nom):void{
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "UPDATE users SET nom = ? WHERE ID_Users = ?";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$nom,$id]); 
    }

    //modifier champs prenom
    public static  function updateUserPrenom($id,$prenom) :void{
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "UPDATE users SET prenom = ? WHERE ID_Users = ?";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$prenom,$id]); 
    }

    //modifier champs mail
    public static function updateUserMail($id,$mail) :void{
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "UPDATE users SET mail = ? WHERE ID_Users = ?";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$mail,$id]); 
    }

    //modifier champs tel
    public static function updateUserTel($id,$tel) :void{
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "UPDATE users SET tel = ? WHERE ID_Users= ?";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$tel,$id]); 
    }

    public static function createOffence(Offence $offence) : void{    
        //Ouverture base de données
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "SELECT ID_Users FROM users WHERE Nom = ? ;"; // Requête
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$offence->getDenonciateur()->getNom()]);
        $tab = $stmt->fetch();
        //Deuxième requête
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "INSERT INTO offence (Nom, Prenom, Libelle, Montant, Date, ID_Users, Code_Infraction) VALUES (?,?,?,?,CURRENT_TIME(),?,?);"; //Changement de CurrentDate vers CurrentTime
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$offence->getContrevenant()->getNom(), $offence->getContrevenant()->getPrenom(), $offence->getPenalite()->getLibelle(), $offence->getPenalite()->getMontant(),$tab["ID_Users"], $offence->getPenalite()->getCodeInfraction()]);
        /** @author Jérémy */
        //Parce qu'on a pas le droit au trigger
        //Première requête
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "SELECT COUNT(*) AS denonciation_cpt FROM offence WHERE ID_users = ?;";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$tab["ID_Users"]]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $compteurDenonciation = $result["denonciation_cpt"];
        //Deuxième requête
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "SELECT COUNT(*) AS casier_cpt FROM offence WHERE Nom = ?;";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$offence->getContrevenant()->getNom()]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $compteurCasier = $result["casier_cpt"];
        //Troisième et quatrième requête, les triggers c'est mieux
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "UPDATE users SET cpt_denonciations = ?  WHERE ID_Users = ?;";
        $sql2 = "UPDATE users SET cpt_casier = ? WHERE Nom = ?;";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$compteurDenonciation, $tab["ID_Users"]]);
        $stmt = $bdd->prepare($sql2);
        $stmt->execute([$compteurCasier, $offence->getContrevenant()->getNom()]);
    }


    /** @author Jérémy */
    public static function readOffence() : array {
        //driver vers la DB
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $stmt = $bdd->prepare('SELECT * FROM offence; ');
        $stmt->execute();
        //rapatrie toutes les lignes de la table
        $tabOffence = $stmt->fetchAll();
        return $tabOffence;
    }

    public static function readPenality() : array {
        //driver vers la DB
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $stmt = $bdd->prepare('SELECT * FROM penality; ');
        $stmt->execute();
        //rapatrie toutes les lignes de la table
        $tabOffence = $stmt->fetchAll();
        return $tabOffence;

    }

    /** @author Jérémy */
    public static function updateOffence($nom) : bool { 
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "UPDATE offence SET Status = True WHERE Nom = ?;";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$nom]);
        return true; 
    }

    public static function readContrevenant($nom) : array {
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "SELECT Nom, Prenom, Mail, Tel, Password FROM users WHERE Nom = ? ;";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$nom]);
        $tabUser = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        return $tabUser;
    }

    public static function readUser($mail) : array {
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "SELECT Nom, Prenom, Mail, Tel, Password FROM users WHERE Mail = ? ;";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$mail]);
        $tabUser = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        return $tabUser;
    }

    public static function offenceSum($nom) : float {
        $bdd = new PDO('mysql:host=localhost;dbname=tp_penality;charset=utf8mb4', 'root', '');
        $sql = "SELECT ROUND(SUM(Montant),2) AS Total FROM offence WHERE Nom = ? AND Status = false";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$nom]);
        $sum = $stmt->fetch();
        $sum = $sum[0];
        if ($sum == NULL) {
            $sum = 0;
        } else{ 
            $sum = $sum;
        }
        return $sum;
    }

}
