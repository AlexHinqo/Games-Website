<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

include "$root/model/temp.php";

$title = "Culture Game";
include "$root/view/nav.php";

if (isset($_SESSION['quizz'])) {
    // Destruction de la session "quizz"
    session_unset();
    session_destroy(); }


session_name("quizz");
session_id("quizz");
session_start();

$questions = array(
    array(
        'question_text' => 'adezaazeda',
        'category' => 'ca',
        'answer' => ''
    ),
    array(
        'question_text' => 'b',
        'category' => 'cb',
        'answer' => ''
    ),
    array(
        'question_text' => 'c',
        'category' => 'cc',
        'answer' => ''
    ),
    array(
        'question_text' => 'd',
        'category' => 'cc',
        'answer' => ''
    )
);

// Check if session variables need initialization
if (!isset($_SESSION['current_question'])) {
    $_SESSION['current_question'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the user's answer
    $questions[$_SESSION['current_question']]['answer'] = $_POST['answer'];
    
    // Move to the next question
    $_SESSION['current_question']++;
}

// Check if all questions have been answered
if ($_SESSION['current_question'] >= count($questions)) {
    // Redirect to the end page
    header("Location: end_page.php");
    exit;
}

$question = $questions[$_SESSION['current_question']];
$question_text = $question['question_text'];
$qnumber = $_SESSION['current_question'] + 1; // Adjust numbering
$qtotal = count($questions);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Game Culture</title>
</head>
<body>
<div class="qnumber">
    <p><?php echo $qnumber . "/" . $qtotal; ?></p>
</div>

<div class="question">
    <div class="qtext">
        <p class="text"><?php echo $question_text ?></p>
    </div>
    <div class="qanswer">
        <form action="" method="post">
            <textarea id="answerInput" name="answer" placeholder="Votre réponse.." required></textarea>
            <button type="submit">VALIDER</button>
        </form>
    </div>
</div>

<!-- Display session ID for debugging purposes -->
<div>
    <p>Session ID: <?php echo session_id(); ?></p>
</div>
</body>
</html> 

<?php
// $title = "Culture Game";
// include_once "$root/view/nav.php";

// $qnumber = 0;
// $qtotal = count($questions);

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Process the submitted answer
//     $answer = $_POST['answer'];
//     $qnumber++; // Move to the next question
// } else {
//     $qnumber = 0; // Default to the first question
// }

// // Show the current question if there are more questions
// if ($qnumber < $qtotal) { 
//     $question_text = $questions[$qnumber]['question_text'];
//     include "$root/view/gameculture_main.php";
// } elseif ($qnumber == $qtotal) {
//     // Last question
//     $question_text = $questions[$qnumber]['question_text'];
//     include "$root/view/gameculture_main.php";
// } else {
//     echo "blabla";
// }





// function handleFormSubmission($currentQuestion, $totalQuestions) {
//     $nextQuestion = $currentQuestion + 1;
//     if ($nextQuestion <= $totalQuestions) {
//         // Redirect to the next question
//         include "$root/view/gameculture_main.php";
//         exit;
//     } else {
//         // Redirect to the end page
//         header("Location: index.php?action=gameculture_main");
//     }
//     exit;
// }