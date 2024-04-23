<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

include_once "$root/model/culture.php";

if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();}

if ($_SESSION['user']['isadmin'] == 0 || VerifyLogIn() == false){
    echo "<script>'suu  '</script>";
        header("Location: index.php?action=default");
        exit();
    }

 

$array = getAllQuestions();



function display($array) {
    global $root;
    foreach ($array as $questionId => $data) {
        include "$root/view/admin_question.php";
    }
}

$title = "Admin";
include "$root/view/nav.php";
include "$root/view/admin.php";
