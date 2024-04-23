<?php

require_once "connectdb.php";

function getAllQuestions(){
    $dbConnection = connectdb();

    try {
        $req = $dbConnection->prepare("SELECT id, question_text FROM questions");
        $req->execute();
        $questions = $req->fetchAll(PDO::FETCH_ASSOC);

        $req = $dbConnection->prepare("SELECT question_id, answer_text FROM answers");
        $req->execute();
        $answers = $req->fetchAll(PDO::FETCH_ASSOC);

        $res = array();
        
        foreach ($questions as $question) {
            $res[$question['id']] = array(
                'question_text' => $question['question_text'],
                'answers' => array()
            );
        }
        
        foreach ($answers as $answer) {
            $res[$answer['question_id']]['answers'][] = $answer['answer_text'];
        }

        
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }

    return $res;
}
?>