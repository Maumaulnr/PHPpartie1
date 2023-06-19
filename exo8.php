<h1>Exo 8 PHP</h1>

<!-- http://localhost/LENOIR-Maurane/ALGO-PHP/partie1/exo8.php -->

<p>
Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme: <br>
Affichage(pour la table de 8): <br>
Table de 8: <br>
1 x 8 = 8 <br>
2 x 8 = 16 <br>
3 x 8 = 24 ... <br>
Remarque: proposer 2 solutions avec 2 types de boucles. <br>
</p>

<!-- 
Pour i allant de 0 à 10
-->

<h2>Résultat</h2>

<?php


// Déclaration variable
$n = 8;    // chiffre à multiplier  
$i;     // nombre de boucle qui va jusqu'à 10
$resultat;

// condition et affichage

for ($i=1; $i <= 10; $i++) { 
    echo "$i". "*". "$n". " ". "=". " ". $i*$n. "<br>";
}


?>