<?php
/* Lecture d'un fichier CSV */

$fichier = fopen("especes.csv", "r")
    or die("Impossible d'ouvrir le fichier CSV");

$entetes = fgetcsv($fichier, 0, ",", "\"");
while ($donnees = fgetcsv($fichier, 0, ",", "\"")) {
    echo $donnees[1] . "<br>";
}

fclose($fichier);