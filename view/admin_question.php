<div class='adminquestion'>
    <form action='index.php?action=admin' method='post' class="admin-form">
        <input type='hidden' name='question_id' value='<?php echo $questionId; ?>'>

        <div class="left-column">
            <div class="question">
                <label for='question_text'>Question <?php echo $questionId; ?> :</label>
                <input type='text' name='question_text' value='<?php echo htmlspecialchars($data['question_text'], ENT_QUOTES, 'UTF-8'); ?>'>
            </div>
            <div class="answer">
                <?php $answer = $data['answers'][0] ?>
                <label for='answer_text[]'>Answer :</label>
                <input type='text' name='answer_text[]' value='<?php echo htmlspecialchars($answer, ENT_QUOTES, 'UTF-8'); ?>'>
            </div>
        </div>

        <div class="adminbuttons">
            <input type="radio" id="update" name="choice" value="update" required>
                <label for="update">Update</label>
            <br>
            <input type="radio" id="delete" name="choice" value="delete" required>
                <label for="delete">Delete</label>
            <br>
            <input type="submit" name="submitmodify" value="Submit">
            </div>
        </div>

    </form>
</div>
