<h1>Exo 9 PHP</h1>

<!-- http://localhost/LENOIR-Maurane/ALGO-PHP/partie1/exo9.php -->

<p>
Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe. <br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »). <br>
Affichage : <br>
Age : 32 <br>
Sexe : F <br>
La personne est imposable. <br>
</p>

<!-- 
femme >= 18 && femme <= 35 || homme > 20 = imposable
else "Non imposable"
-->

<h2>Résultat</h2>

<?php

$sexe = "F";
$age = 35;
$result;

$result = $age >= 18 && $age <= 35 ? "imposable" : "non imposable";
echo "Age : ". $age. "<br>". "Sexe : ". $sexe. "<br>". "La personne est". $result. "<br>";

$sexe = "H";
$age = 19;
$result = $age > 20 ? "imposable" : "non imposable";
echo "Age : ". $age. "<br>". "Sexe : ". $sexe. "<br>". "La personne est ". $result. "<br>";

?>