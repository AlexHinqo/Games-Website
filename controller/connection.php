<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}


include_once "$root/model/user.php";

$connected = false;

if (isset($_POST["mailUser"]) && isset($_POST["passwordUser"])) {

    if ($_POST["mailUser"] != "" && $_POST["passwordUser"] != "") {
        $mail = $_POST["mailUser"];
        $password = $_POST["passwordUser"];

        $user = verifyUser($mail,$password);
        if ($user) {
            $connected = true;
            $userinfo = getUserByMail($mail);
            session_start();
            $_SESSION['user'] = array(
                'id' => $userinfo['id'],
                'username' => $userinfo['username'],
                'mail' => $userinfo['email'],
                'isadmin' => $userinfo['is_admin']
            );
            session_write_close();
        }
        else {
            $res = "<script>alert('Email ou mot de passe éroné');</script>";
        }
    }
}

if ($connected) {
    $title = "Connexion";
    header("Location: index.php?action=profile");
} else {
    $title = "Inscription";
    include "$root/view/nav.php";
    include "$root/view/connection.php";
}
?>