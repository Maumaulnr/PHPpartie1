<h1>Exo 6 PHP</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
Affichage :
Prix unitaire de l'article : 9.99 € (HT)
Quantité : 5 
Taux de TVA : 0.2
Le montant de la facture à régler est de : 59.94 €
</p>

<!-- montant TVA pour un article = 2€  (ALT+0128 = €) 
Montant TTC = 11,99 € (9,99+2)
(prix TTC / 120) x 20 = 59,94 / 120 = 0,4995 * 20 = 9,99€ (montant TVA)
prix HT = 9,99€ (59,94 - 9,99)
Montant total = (9,99 + 2) x 5 = 11,99 x 5 = 59,95€
-->

<h2>Résultat</h2>

<?php

// Déclaration variable
$nbArticle = 5;  // 5
$prixHT = 9.99;     // 9,99
$tauxTVA = 0.2;   // décimal (0.2)
$montantTotal;



// condition et affichage

$montantTotal = $nbArticle * $prixHT + $nbArticle * $prixHT * $tauxTVA;

echo "Le total TTC est de $montantTotal €<br>";



?>