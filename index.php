<?php
include_once "rootfile.php";
$title = "Games website";
$csslink = "public/css/culture.css";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo&display=swap">
    <!-- CSS Links -->
        <style type="text/css">
            @import url("public/css/nav.css");
            @import url(<?php echo $csslink; ?>);
        </style>
    <!-- Title -->
    <title> <?php echo $title;?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
include_once "view/nav.php";
include_once "view/culture.php";?>
<script src="public/js/nav.js"></script> 