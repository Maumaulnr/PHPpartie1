<h1>Exo 5 PHP</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.
Affichage :
Montant en francs : 100
100 francs = 15.24 €
</p>

<!-- Lire la variable en francs
combien 1 franc vaut en euros?
Convertir en euros
 -->

<!--  -->

<?php

// Déclaration variable

$nFranc = 1;
$nEuro = 0.15;
$n = 88.5454878;
$resultat;

// condition et affichage

echo "Montant en francs :  $n. <br>" ;
$resultat = $n * $nEuro;
$resultat = number_format($resultat, 2); // on veut arrondir à 2 décimales
echo "$n francs";
echo " = $resultat €<br>";


?>