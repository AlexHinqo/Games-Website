<div class='admin'>
    <form action='update_question.php' method='post' class="admin-form">
        <input type='hidden' name='question_id' value='<?php echo $questionId; ?>'>
        <div class="left-column">
            <div class="question">
                <label for='question_text'>Question :</label>
                <input type='text' name='question_text' value='<?php echo htmlspecialchars($data['question_text'], ENT_QUOTES, 'UTF-8'); ?>'>
            </div>
            <div class="answer">
                <?php $answer = $data['answers'][0] ?>
                <label for='answer_text[]'>Answer :</label>
                <input type='text' name='answer_text[]' value='<?php echo htmlspecialchars($answer, ENT_QUOTES, 'UTF-8'); ?>'>
            </div>
        </div>
        <div class="right-column">
            <div class="adminbuttons">
                <button id = 'update' type='submit'>Update</button>
                <button id = 'delete' formaction='delete_question.php' formmethod='post'>Delete</button>
            </div>
        </div>
    </form>
</div>
