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
1 an = 12 mois = 365 jours
33 ans = (33 x 12mois)/1 = 396 mois = (396 x 365)/12 = 12 045 jours
4 mois = (4mois x 365jours)/12 = 121,67 jours (arrondi à deux décimals)
4 jours
12045 + 122 + 4  = 12 171
Entre le 17/01/1985 et le 21/05/2018, il s'est écoulé 12177 jours soit 33 ans, 4 mois et 4 jours.
-->

<h2>Résultat</h2>

<?php

// Déclaration variable
$dateDeNaissance = strtotime("1985-01-17");  // To avoid potential errors, you should YYYY-MM-DD dates or date_create_from_format() when possible.
$date = strtotime("2018-05-21");


// condition et affichage

$annees = ("2018" - "1985");

$mois = ("05" - "01");

$jours = ("21" - "17");

echo "Age de la personne : ". "$annees  ans ". "$mois  mois ". "$jours  jours". "<br>";

?>