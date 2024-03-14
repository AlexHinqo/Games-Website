<?php
include_once "rootfile.php";
$title = "Games website";
$csslink = "view/css/nav.css";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <style type="text/css">
            @import url(<?php echo $csslink; ?>);
        </style>
    <title> <?php echo $title;?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
include_once "view/nav.php";
include_once "view/connection.php";?>