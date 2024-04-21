<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo&display=swap">
    <!-- CSS Links -->
        <style type="text/css">
            @import url("public/css/nav.css");
            @import url("public/css/culture.css");
            /* @import url("public/css/nav.css"); */
        </style>
    <!-- Title -->
    <title> <?php echo 'Philia - '.$title;?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<nav class="navbar">

  <div class="hamburger">
    <span></span>
    <span id="mid"></span>
    <span></span>
  </div>  

  <h1 class="brand"><a href="index.php?action=default">Philia</a></h1>

  <div class="icons">
    <button aria-label="Toggle Dark Mode" class="icon-button" id="bt-darkmode">
      <img src="public/assets/icon-darkmode.png" alt="">
    </button> 
    <button aria-label="Account" class="icon-button" id="bt-account">
        <a href="index.php?action=login"><img src="public/assets/icon-account.png" alt=""></a>
    </button>
  </div>

  <div class = "hamburgermenu">
    <ul>
      <li><a href="index.php?action=login">Se connecter</a></li>
      <li class="disabled">Mode Sombre</a></li>
      <li><a href="index.php" class="disabled">Actualités</a></li>
      <li><a href="index.php?action=about">À propos</a></li>
      <li><span class="line"></span></li>
    </ul>
  </div>

</nav>

<script src="public/js/nav.js"></script>