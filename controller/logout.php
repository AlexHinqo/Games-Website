<?php

include_once "$root/model/user.php";

function Logout(){
    session_start();
    session_destroy();
    header("Location: index.php?action=default");
    exit();
}

logout();

?>