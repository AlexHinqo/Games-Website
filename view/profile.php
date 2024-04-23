<h1>User Profile</h1>

    <div>
        <p><strong>Username:</strong> <?php echo $_SESSION['user']['username']; ?></p>
        <p><strong>Email:</strong> <?php echo $_SESSION['user']['mail']; ?></p>
        <p><strong>User ID:</strong> <?php echo $_SESSION['user']['id']; ?></p>
    </div>
    <form action="index.php?action=logout" method="post">
        <button type="submit">Logout</button>
    </form> 

        <?php if ($_SESSION['user']['isadmin'] == 1): ?>
    <form action="index.php?action=admin" method="post">
        <button type="submit">Admin</button>
    </form>
    <?php endif; ?>

    </form>