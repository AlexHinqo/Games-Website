<?php
include "rootfile.php";
include "$root/controller/maincontroller.php";
// include_once "$root/model/login.php";


if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{
    
    $action = "defaut";
}

$file = maincontroller($action);
include "$root/controller/$file";