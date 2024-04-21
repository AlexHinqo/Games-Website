<?php

function maincontroller($action){
    $Actions = array();
    $Actions["default"] = "home.php";
    $Actions["gameculture_start"] = "gameculture_start.php";
    $Actions["gameculture_main"] = "gameculture_main.php";
    $Actions["gameculture_end"] = "gameculture_end.php";
    $Actions["inscription"] = "inscription.php";
    $Actions["connexion"] = "connexion.php";

    
    if (array_key_exists ( $action , $Actions )){
        return $Actions[$action];
    }
    else{
        return $Actions["default"];
    }

};