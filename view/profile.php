<div class="maincontainer">
    <div>
    <h1>User Profile</h1>
        <div>
            <p><strong>Pseudonyme : </strong> <?php echo $_SESSION['user']['username']; ?></p>
            <p><strong>Email : </strong> <?php echo $_SESSION['user']['mail']; ?></p>
            <p><strong>User ID : </strong> <?php echo $_SESSION['user']['id']; ?></p>
        </div>
        <div class="formbuttons" id="profilebuttons">
            <div class="profiletop">
                <form action="index.php?action=logout" method="post">
                    <button type="submit">Logout</button>
                </form> 

                <?php if ($_SESSION['user']['isadmin'] == 1): ?>
                <form action="index.php?action=admin" method="post">
                    <button type="submit">Admin</button>
                </form>
                <?php endif; ?>
            </div>

            <form action="index.php?action=deleteaccount" method="post" id="profilebottom" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer votre compte ?');">
                <button type="submit">Delete Account</button>
            </form> 
        </div>
    </div>
</div