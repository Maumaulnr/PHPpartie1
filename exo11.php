<h1>Exo 11 PHP</h1>

<!-- http://localhost/LENOIR-Maurane/ALGO-PHP/partie1/exo11.php -->

<p>
Initialiser un tableau de x marques de voitures. <br>
Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). <br>
Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau. <br>
<br>
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes » <br>
<br>
Affichage (attention à utiliser une liste à puces) <br>
Il y a 4 marques de voitures dans le tableau : <br>
Peugeot <br>
Renault <br>
BMW <br>
Mercedes <br>
</p>

<!-- 
Pour i allant de 0 à 4 
-->

<h2>Résultat</h2>

<?php

// Déclaration variable
$marquesDeVoiture = ["Peugeot", "Renault", "BMW", "Mercedes"] ;   // marque de la voiture
$nbMarque = count($marqueDeVoiture);    // compter le nombre de marques de voiture
$i;     // nombre de voitures

// condition et affichage
echo "Il y a ". $nbMarque. " marques de voitures dans le tableau : ". "<br>"; //afficher le nombre de marques

// afficher le contenu
for ($i = 0; $i < $nbMarque; $i++) { 
    echo $marquesDeVoiture[$i]."<br>";
}


?>