<?php

function maincontroller($action){
    $Actions = array();
    $Actions["default"] = "home.php";
    $Actions["gameculture_start"] = "gameculture_start.php";
    $Actions["gameculture_main"] = "gameculture_main.php";
    $Actions["gameculture_end"] = "gameculture_end.php";
    $Actions["register"] = "register.php";
    $Actions["connection"] = "connection.php";
    $Actions["about"] = "about.php";
    $Actions["profile"] = "profile.php";
    $Actions["admin"] = "admin.php";
    $Actions["logout"] = "logout.php";
    $Actions["deleteaccount"] = "deleteaccount.php";

    
    if (array_key_exists ( $action , $Actions )){
        return $Actions[$action];
    }
    else{
        return $Actions["default"];
    }

};