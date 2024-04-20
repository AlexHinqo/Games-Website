<?php
include "rootfile.php";
include "$root/controller/controleurPrincipal.php";
include_once "$root/modele/authentification.inc.php";


if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{
    
    $action = "defaut";
}

$fichier = controleurPrincipal($action);
include "$racine/controleur/$fichier";


?>
     