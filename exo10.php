<h1>Exo 10 PHP</h1>

<!-- http://localhost/LENOIR-Maurane/ALGO-PHP/partie1/exo10.php -->

<p>
A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €. <br>
Affichage : <br>
Montant à payer : 152 € <br>
Montant versé : 200 € <br>
Reste à payer : 48 € <br>
<br>
*************************************************** <br>
<br>
Rendue de monnaie : <br>
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 € <br>
</p>

<!-- 
$montant_versé - $montant_a_payer = $reste_a_payer
Par exemple sur 48 € il faut rendre : 
4x billets de 10€ , 1x billet de 5€ et 1x pièce de 2€ et 1x pièce de 1€
48 - 10 = 38 - 10 = 28 - 10 = 18 - 10 = 8 - 5 = 3 - 2 = 1 - 1 = 0
-->

<h2>Résultat</h2>

<?php

// Déclaration variable
$montant_a_payer = 152;
$montant_versé = 200;
$reste_a_payer = $montant_versé - $montant_a_payer;
$billet_10 = 0;
$billet_5 = 0;
$piece_2 = 0;
$piece_1 = 0;

// condition et affichage

    // On affiche d'abord le montant à payer, le montant versé et le reste à payer
echo "Montant à payer : ". $montant_a_payer. "€". "<br>";
echo "Montant versé : ". $montant_versé. "€". "<br>";
echo "Reste à payer : ". $reste_a_payer. "€". "<br>";

    // tant que reste à payer est supérieur à 10, déduire 10 à chaque boucle et etc.
while ($reste_a_payer >= 10) {
    $reste_a_payer -= 10;   // " -= " soustrait une valeur (10) à la variable $reste_a_payer (48-10)
    $billet_10++;
}

while ($reste_a_payer >= 5) {
    $reste_a_payer -= 5;
    $billet_5++;
}

while ($reste_a_payer >= 2) {
    $reste_a_payer -= 2;
    $piece_2++;
}

while ($reste_a_payer >= 1) {
    $reste_a_payer -= 1;
    $piece_1++;
}

// rendre la monnaie
echo "Rendue de monnaie : ". "<br>";
echo $billet_10. " billets de 10€". "<br>";
echo $billet_5. " billets de 5€". "<br>";
echo $piece_2. " pièces de 2€". "<br>";
echo $piece_1. " billets de 1€". "<br>";


?>