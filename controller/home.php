<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

$title = "Home";
include "$root/view/nav.php";
include "$root/view/home.php";


?>