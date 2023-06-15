<h1>Exo 2 PHP</h1>

<?php

// Déclaration de VARIABLE

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($chaineDeCaracteres);

// AFFICHAGE

echo "La phrase « $chaineDeCaracteres » contient ".str_word_count($chaineDeCaracteres)." mots<br>";