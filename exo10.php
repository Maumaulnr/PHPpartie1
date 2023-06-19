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
$montant_a_payer = 150;
$montant_versé = 200;
$reste_a_payer = 50;
$rendue_de_monnaie;
$i;

// condition et affichage

echo "Montant à payer : ". $montant_a_payer. " €". "<br>". "Montant versé : ". $montant_versé. " €". "<br>";

echo "Reste à payer : ". $reste_a_payer. " €". "<br>";


echo "Rendue de monnaie : ". $rendue_de_monnaie. "€". "<br>";

?>