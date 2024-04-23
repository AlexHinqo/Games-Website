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


function updateQuestion($question_id, $question_text, $answer_text){
    $dbConnection = connectdb();

    try {
        $req = $dbConnection->prepare("UPDATE answers SET answer_text = :answer_text WHERE question_id = :question_id");
        $req->bindParam(':answer_text', $answer_text);
        $req->bindParam(':question_id', $question_id);
        $req->execute();
        
        $req = $dbConnection->prepare("UPDATE questions SET question_text = :question_text WHERE id = :question_id");
        $req->bindParam(':question_text', $question_text);
        $req->bindParam(':question_id', $question_id);
        $req->execute();


        
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function deleteQuestion($question_id){
    $dbConnection = connectdb();

    try {
        $req = $dbConnection->prepare("DELETE FROM answers WHERE question_id = :question_id");
        $req->bindParam(':question_id', $question_id);
        $req->execute();
        
        $req = $dbConnection->prepare("DELETE FROM questions WHERE id = :question_id");
        $req->bindParam(':question_id', $question_id);
        $req->execute();
        
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function addQuestion($question_text,$answer_text,$cat_id){
    $dbConnection = connectdb();

    try {
        $req = $dbConnection->prepare("INSERT INTO questions (question_text, category_id) VALUES (:question_text, :cat_id)");
        $req->bindParam(':cat_id', $cat_id);
        $req->bindParam(':question_text', $question_text);
        $req->execute();
        
        $question_id = $dbConnection->lastInsertId();

        $req = $dbConnection->prepare("INSERT INTO answers (answer_text, question_id) VALUES(:answer_text, :question_id)");
        $req->bindParam(':question_id', $question_id);
        $req->bindParam(':answer_text', $answer_text);
        $req->execute();
        
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

?>