<?= isset($res) ? $res : '' ?>

<div class="formlogin">
    <h1>Connexion</h1>

    <form action="index.php?action=connection" method="POST">

        <input type="text" name="mailUser" placeholder="Email" /><br />
        <input type="password" name="passwordUser" placeholder="Mot de passe"  /><br />
        <input type="submit" />

    </form>

    <a href="index.php?action=register">Inscription</a>
</div>
