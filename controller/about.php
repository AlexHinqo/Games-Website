<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

$title = "About";
include "$root/view/nav.php";
include "$root/view/about.php";
