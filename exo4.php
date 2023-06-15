<h1>Exo 4 PHP</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est un palindrome.
Affichage :
La phrase « Engage le jeu que je le gagne » est palindrome</p>

<!-- l'algorithme doit lire à l'endroit et à l'envers 
convertir en minuscule
enlever les espaces
inverser chaine de caractères
-->

<?php

// Déclaration de VARIABLE

$chaineDeCaracteres = "Engage le jeu que je le gagne";
echo $chaineDeCaracteres. "<br>";

// chaîne de caractère en minuscule
$phraseMinuscule = strtolower($chaineDeCaracteres);
echo strtolower($chaineDeCaracteres). "<br>";

//minuscule sans espace
$phraseSansEspace = str_replace(" ", "", $phraseMinuscule);
echo str_replace(" ", "", $phraseMinuscule). "<br>";

// minuscule sans espace inversé
$phraseInverse = strrev($phraseSansEspace);
echo strrev($phraseInverse). "<br>";

// condition et affichage

if ($phraseSansEspace == $phraseInverse) {
    echo "C'est est un palindrome";
} else {
    echo "Ce n'est pas un palindrome";
}


?>