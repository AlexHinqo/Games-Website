<div class="addquestion">
    <div>
    <form action='index.php?action=admin' method='post' class="admin-form">
        <input type="text" name="question_text" placeholder="Question" required/> <br/><br/>
        <input type="text" name="answer_text" placeholder="Réponse" required/> <br/><br/>
        <input type="submit" name="submitadd" value="Créer">
    </form>
    </div>
</div>
<?php displayAllQuestions(); ?>
