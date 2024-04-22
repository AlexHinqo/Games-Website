<?= isset($res) ? $res : '' ?>

<div class="formlogin">
    <h1>Connexion</h1>

    <form action="./?action=connexion" method="POST">

        <input type="text" name="mailU" placeholder="Email de connexion" /><br />
        <input type="password" name="mdpU" placeholder="Mot de passe"  /><br />
        <input type="submit" />

    </form>

    <a href="index.php?action=register">Inscription</a>
</div>
