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


// Déclaration variable
$age = 20;
$sexe = "F";
$categorie;
$i;

// condition et affichage

for ($i=0; $age + $sexe >= 18 && $age + $sexe <= 35; $age) { 
    if (condition) {
        echo ;
    }
}


?>