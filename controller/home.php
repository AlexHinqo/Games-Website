<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}
// include_once "$root/model/bd.resto.inc.php";
// include_once "$root/model/bd.typecuisine.inc.php";
// include_once "$root/model/bd.photo.inc.php";

// creation du menu burger
// $menuBurger = array();
// $menuBurger[] = Array("url"=>"./?action=recherche&critere=nom","label"=>"Recherche par nom");
// $menuBurger[] = Array("url"=>"./?action=recherche&critere=adresse","label"=>"Recherche par adresse");
// $menuBurger[] = Array("url"=>"./?action=recherche&critere=type","label"=>"Recherche par type de cuisine");
// $menuBurger[] = Array("url"=>"./?action=recherche&critere=multi","label"=>"Recherche multicritère");


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
// $listeRestos = getTop4Restos();

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$title = "Home";
include "$root/view/nav.php";
include "$root/view/home.php";


?>