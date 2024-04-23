<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

include_once "$root/model/user.php";

session_start();
if (VerifyLogIn() == false){
    header("Location: index.php?action=default");
    exit();
}

$title = "Profil";
include "$root/view/nav.php";
include "$root/view/profile.php";
?>