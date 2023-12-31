<h1>Exo 13 PHP</h1>

<!-- http://localhost/LENOIR-Maurane/ALGO-PHP/partie1/exo13.php -->

<p>
Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). <br>
Elle devra être affichée avec 2 décimales. <br>
<br>
Affichage : <br>
Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9 <br>
Sa moyenne générale est donc de : 11.22 <br>
</p>

<!-- 
Il faut additionner note par note (10+12+...)
Il faut compter combien il y a de note 
Puis diviser la somme des notes par le nombre de notes


revenir sur exo 12
-->

<h2>Résultat</h2>

<?php

// Déclaration variable
$prenom = "Virgile";
$eleve = ["Virgile" => [10, 12, 8, 19, 3, 16, 11, 13, 9]];
$nbNotes;
$sommeNotes;
$moyenneGeneral;


// condition et affichage

    // la fonction créer est : calculerMoyenne
function calculerMoyenne($eleve) : float {
    $nbNotes = count($eleve);   // compte le nombre de notes = 9
    $sommeNotes = array_sum($eleve);    // additionne les notes = 101
    $moyenneGeneral = round($sommeNotes / $nbNotes, 2);     // 101/9 = 11,22

    return $moyenneGeneral;
}

// foreach ne fonctionne que pour les tableaux et les objets, et émettra une erreur si vous tentez de l'utiliser sur une variable de type différent ou une variable non initialisée.
// foreach fournit une façon simple de parcourir des tableaux
// On affiche la moyenne
foreach($eleve as $prenom => $moyenneGeneral) {
    echo "Sa moyenne générale est donc de : ". calculerMoyenne([10, 12, 8, 19, 3, 16, 11, 13, 9])."<br>";
}



?>

