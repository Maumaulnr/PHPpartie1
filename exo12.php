<h1>Exo 12 PHP</h1>

<!-- http://localhost/LENOIR-Maurane/ALGO-PHP/partie1/exo12.php -->

<p>
A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective : <br>
(français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») <br>
<br>
Exemple : <br>
tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG <br>
<br>
Affichage : <br>
Salut Mickaël <br>
Hola Virgile <br>
Hello Marie-Claire <br>
<br>
Variante : trier d’abord le tableau par ordre alphabétique du prénom <br>
Affichage : <br>
Hello Marie-Claire <br>
Salut Mickaël <br>
Hola Virgile <br>
</p>

<!-- 

-->

<h2>Résultat</h2>

<?php

// Déclaration variable
// clé (key) -> valeur (value) (clé doit être unique)
$tableau = array(
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
);
$key;
$val;

ksort($tableau);    // trier sur la clé (A à Z)

// condition et affichage


foreach ($tableau as $key => $val) {
    echo "$key = $val\n". "<br>";
}


?>