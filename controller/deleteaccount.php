<?php

include_once "$root/model/user.php";

session_start();


if(isset($_SESSION['user'])) {
    $id = $_SESSION['user']['id'];
    deleteUser($id);
    session_destroy();
    $alert = "<script>alert('Votre compte a bien été supprimé.');</script>";
    header("Location: index.php?action=default");
    exit();
} else {
    header("Location: index.php?action=default");
    session_write_close();
    exit();
}

?>