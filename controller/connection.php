<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

include "$root/model/temp.php";

$test = $test;

$title = "Connection";
include "$root/view/nav.php";
include "$root/view/connection.php";
