<div class="qnumber">
    <p><?php echo ($qnumber+1) . "/" . $qtotal; ?></p>
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
</body>
