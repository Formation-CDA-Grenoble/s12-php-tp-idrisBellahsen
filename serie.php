<?php


$_ENV = parse_ini_file('.env');
include 'api/tmdb.php';
if (isset($_POST['serie'])){
// Récupère les informations d'une série télévisée
$tvShow = getTvShow(MY_TV_SHOWS[$_POST['serie']]);

echo ($tvShow->name.", Nombre de saison ".sizeof($tvShow->seasons));
}

?>