<?php

function sanitize($tab) {
    foreach ($tab as $key => $value) {
        //var_dump($tab);
        $tab[$key] = htmlentities($value);
    }
    //var_dump($tab);
    return $tab;
}

function displayDate($date, $format) {
    $tab = explode(" ", $date);
    $date = explode("-", $tab[0]);
    //var_dump($date);
    $mois = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
    $annee = $date[0];
    $libMois = $mois[(int)$date[1]-1];
    $jour = $date[2];
    if ($format == 1) return $jour . " " . $libMois . " " . $annee;
}