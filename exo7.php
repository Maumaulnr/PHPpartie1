<h1>Exo 7 PHP</h1>

<!-- http://localhost/LENOIR-Maurane/partie1/exo7.php -->

<p>
Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge: <br>
Poussin: entre 6 et 7 ans <br>
Pupille: entre 8 et 9 ans <br>
Minime: entre 10 et 11 ans <br>
Cadet: à partir de 12 ans <br>
Si la catégorie n’est pas gérée, merci de le préciser. <br>

Affichage : L’enfant qui a 10 ans appartient à la catégorie « Minime ».
</p>

<!-- 
    Si l'enfant a entre 6 et 7 ans : ecrire "l'enfant est un poussin" 
    Si l'enfant a entre 8 et 9 ans : ecrire "l'enfant est un pupille" 
    Si l'enfant a entre 10 et 11 ans : ecrire "l'enfant est un minime" 
    Si l'enfant a à partir de 12 ans : ecrire "l'enfant est un cadet" 

    Sinon écrire "hors catégorie"

-->

<h2>Résultat</h2>

<?php


// Déclaration variable
$age = 10;
$resultat;



// condition et affichage

if(gettype($age) == "string" || gettype($age) == "integer" ) {      // gettype — Retourne le type de la variable
    if($age >= 6 ) {
        $resultat = $poussin;
    } elseif($age >= 8 ) {
        $resultat = $pupille;
    } elseif($age >= 10 ) {
        $resultat = $minime;
    } elseif($age >= 12) {    // Supérieur ou égal à 12
        $resultat = $cadet;
    }

    echo "L'enfant qui a $age ans est : $resultat.<br>";
} else {
    echo "Hors catégorie !<br>";
}


?>