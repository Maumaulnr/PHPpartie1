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
$tableau1 = array(
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
);
$prenom;
$langue;

// condition et affichage

ksort($tableau1);    // trier sur la clé (A à Z)

foreach ($tableau1 as $prenom => $langue) {
    echo "$prenom = $langue". "<br>";
}

// ecrire une fonction personnalisé qu'on peut appeler
// Donnez à la fonction un nom qui reflète ce qu'elle fait !
function ecrireBonjour($tableau1) {
    $tableau2 = array(
        "ENG" => "Hello",
        "ESP" => "Hola",
        "FRA" => "Salut"
    );

    foreach ($tableau1 as $prenom => $langue) {
        isset($tableau2[$langue]);
        echo $tableau2[$langue]. " ". $prenom. "<br>";
    }
}

ecrireBonjour($tableau1);

?>