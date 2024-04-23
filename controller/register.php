<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

function passwordLANSSI($password) {
    return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d\s])[\w\d\W]{8,}$/', $password);
}

include_once "$root/model/user.php";

$registered = false;
$res = "";

if (isset($_POST["mailUser"]) && isset($_POST["passwordUser"]) && isset($_POST["nicknameUser"])) {

    if ($_POST["mailUser"] != "" && $_POST["passwordUser"] != "" && $_POST["nicknameUser"] != "") {
        $mail = $_POST["mailUser"];
        $password = $_POST["passwordUser"];
        $nickname = $_POST["nicknameUser"];

        if (passwordLANSSI($password)) {
            try {
                $registered = createUser($mail, $password, $nickname)[0];
            } catch (PDOException $e) {
                if ($e->getCode() == '23000') {

                    if (strpos($e->getMessage(), 'email') == true) {
                        $res = "<script>alert('Error: Email already exists');</script>";

                    } elseif (strpos($e->getMessage(), 'nickname') == true) {
                        $res = "<script>alert('Error: Nickname already exists');</script>";

                    } else {
                        $res = "<script>alert('An SQL error occurred');</script>";

                    }
                } else {
                    $res = "<script>alert('An error occurred: " . $e->getMessage() . "');</script>";
                }
            }
        } else {
            $res = "<script>alert('Le mot de passe doit comporter au moins 8 caractères, une lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial.');</script>";
        }
    }
}


if ($registered) {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $res = "<script>alert('Votre compte a bien été créé. Veuillez vous connecter.');</script>";
    $title = "Connexion";
    include "$root/view/nav.php";
    include "$root/view/connection.php";
} else {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $title = "Inscription";
    include "$root/view/nav.php";
    include "$root/view/register.php";
}
?>