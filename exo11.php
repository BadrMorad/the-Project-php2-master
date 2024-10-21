<h1>Exercice 11</h1>

<h2>Résultat</h2>

<?php

function formaterDateFr($date_string) {
    $jours = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
    $mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];
 
    $timestamp = strtotime($date_string);
    $jour_semaine = $jours[date("w", $timestamp)];
    $jour = date("d", $timestamp);
    $mois_nom = $mois[date("n", $timestamp) - 1];
    $annee = date("Y", $timestamp);
 
    echo "$jour_semaine $jour $mois_nom $annee";
}
 
formaterDateFr("2018-02-23");
?>