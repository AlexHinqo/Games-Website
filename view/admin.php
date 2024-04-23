<div class="addquestion">
    <form action='index.php?action=admin' method='post' class="admin-form">
        <input type="text" name="question_text" placeholder="Question" required/> <br/>
        <input type="text" name="answer_text" placeholder="Réponse" required/> <br/>
        <input type="submit" name="submitadd" value="Submit">
    </form>
</div>
<?php displayAllQuestions(); ?>
