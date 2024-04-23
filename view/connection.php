<?= isset($res) ? $res : '' ?>

<div class="maincontainer">
    <div>
        <h1>Connexion</h1>

        <form action="index.php?action=connection" method="POST">

            <input type="text" name="mailUser" placeholder="Email" /> <br />
            <input type="password" name="passwordUser" placeholder="Mot de passe"  /><br />
        
        <div class="formbuttons">
            <input type="submit" value="Se connecter"/>

            </form>

            <a href="index.php?action=register">Inscription</a>
        </div>
    </div>
</div>
