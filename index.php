<?php
session_start();
$lang = explode("-", $_SERVER["HTTP_ACCEPT_LANGUAGE"]);

switch ($lang[0]) {
    case 'en':
        include("en/home.php");
        break;
    case 'fr':
        include("fr/accueil.php");
        break;
    default:
        include("fr/accueil.php");
        break;
}
