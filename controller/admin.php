<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

include_once "$root/model/culture.php";

if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();}
    
// VERIF ADMIN
if ($_SESSION['user']['isadmin'] == 0 || VerifyLogIn() == false){
        header("Location: index.php?action=default");
        session_write_close();
        exit();
    }

function displayAllQuestions() {
    global $root;
    $arrayquestions = getAllQuestions();
    foreach ($arrayquestions as $questionId => $data) {
        include "$root/view/admin_question.php";
    }
}

if(isset($_POST['submitmodify'])) {
    extract($_POST);

    if ($choice == 'delete') {
        deleteQuestion($question_id);
    } elseif ($choice == 'update') {
        updateQuestion($question_id,$question_text,$answer_text[0]);
    }

} elseif(isset($_POST['submitadd'])) {
    extract($_POST);

    $cat_id = 10;
    addQuestion($question_text,$answer_text,$cat_id);
}

$title = "Admin";
include "$root/view/nav.php";
include "$root/view/admin.php";
