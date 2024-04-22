<?= isset($res) ? $res : '' ?>

<div class="formlogin">

    <h1>Inscription</h1>

    <form action="index.php?action=register" method="POST">

        <input type="email" name="mailUser" placeholder="Email de connexion" required/><br />
        <input type="password" name="passwordUser" placeholder="Mot de passe" required/><br />
        <input type="text" name="nicknameUser" placeholder="Pseudo" required/><br />

        <input type="submit" value="S'inscrire" />

    </form>

</div>
