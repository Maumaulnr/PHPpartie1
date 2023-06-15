<h1>Exo 3 PHP</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot 
« aujourd'hui » par le mot « demain ». Afficher l'ancienne et la nouvelle phrase</p>

<?php

// Déclaration de VARIABLE

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";
$nouvellePhrase = str_replace("aujourd'hui", "demain", $chaineDeCaracteres);



// AFFICHAGE

echo $chaineDeCaracteres. "<br>";

echo str_replace("aujourd'hui", "demain",  $chaineDeCaracteres);
