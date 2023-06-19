<h1>Exo 14 PHP</h1>

<!-- http://localhost/LENOIR-Maurane/partie1/exo14.php -->

<p>
Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours). <br>
Affichage (si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985) : <br>
Age de la personne : 33 ans 4 mois 4 jours. <br>
</p>

<!-- 
Faire la date la plus récente moins la date de naissance
dans l'exemple il y a :
(3X 10ans) - (3X 1an) - (4X 1mois) - (4X 1jr)
Dans cet exercice on part de la ddn (17/01/1985) vers le 21/05/2018
-->

<h2>Résultat</h2>

<?php

// Déclaration variable
$dateDeNaissance = date("1985/01/17");  // date("Y/m/d")
$date = date("2018/05/21");
$annee10 = 0;   // année par dizaine
$annee = 0;
$mois = 0;
$jour = 0;

// condition et affichage

    // On s'occupe d'abord des années puis des mois et des jours
while ($dateDeNaissance <= 10) {
    $reste_a_payer += 10;   // " -= " additionner une valeur (10) à la variable $dateDeNaissance (17/10/1985 + 10 = 17/10/1995)
    $annee10++;
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

echo "Age de la personne : ";
echo $annee10+$annee. " ans";
echo $mois. " mois";
echo $jour. " jours";


?>