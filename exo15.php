<h1>Exo 14 PHP</h1>

<!-- http://localhost/LENOIR-Maurane/partie1/exo15.php -->

<p>
Créer une classe Personne (nom, prénom et date de naissance). <br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge. <br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ; <br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ; <br>
<br>
Affichage : <br>
Michel DUPONT a … ans <br>
Alice DUCHEMIN a … ans <br>
</p>

<!-- 
setters = méthodes qui servent à définir / modifier / mettre à jour une valeur (set = définir/déterminer)
getters = servent à récupérer des valeurs (get = obtenir)
-->

<h2>Résultat</h2>

<?php

// condition et affichage

// In a class, variables are called properties and functions are called methods!
// On déclare une classe nommée Personne composée de 3 propriétés ($nom, $prenom et $dateDeNaissance) et 2 méthodes set_name() et get_name() permettant de définir et d'obtenir la propriété $nom :
class Personne {
    // Propriétés
    //  public = accès aux propriétés depuis l’intérieur et l’extérieur de la class
    // private = évite les propriétés d'être modifié par une tierce personne (sécurité)
    private string $_nom;
    private string $_prenom;
    private string $_dateDeNaissance;

    // utilisation d'un constructeur : constructeur d’une classe est une méthode qui va être appelée (exécutée) automatiquement à chaque fois qu’on va instancier une classe.
    // Le constructeur va permettre d’initialiser des propriétés dès la création d’un objet
    // On déclare un constructeur de classe en utilisant la syntaxe function __construct()
    // Methods
    public function __construct($prenom, $nom, $dateDeNaissance) {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_dateDeNaissance = $dateDeNaissance;
    }

    // $this = appelé pseudo-variable et sert à faire référence à l’objet couramment utilisé.
    public function getNom() : string {
        return $this->_nom;
    }

    // public function setNom($new_nom) {
    //     $this->nom = $new_nom;
    // }

    public function getPrenom() : string {
        return $this->_prenom;
    }

    public function getDateDeNaissance() : string {
        return $this->_dateDeNaissance;
    }

    // calculer la différence entre la date de naissance et la date d'aujourd'hui
    // %y = permet de récupérer la différence en années entre deux dates
    public function getAge() {
        $dateDeNaissance = date_diff(date_create($this->_dateDeNaissance), date_create("today"));
        return $dateDeNaissance->format("%y ans");
    }
}


// create object
// Instancier 2 personnes: Une instance correspond à la « copie » d’une classe
// A chaque fois qu’on instancie une classe, un objet est également automatiquement créé
// Pour accéder aux propriétés définies originellement dans la classe depuis les objets, on utilise l’opérateur "->" qui est appelé opérateur objet. Sert à indiquer qu'on souhaite accéder à un élément défin dans notre class via un objet créé.
$personne1 = new Personne("Michel", "DUPONT", "1980-02-19");
$personne2 = new Personne("Alice", "DUCHEMIN", "1985-01-17");

echo $personne1->getPrenom(). " ". $personne1->getNom(). " a ". $personne1->getAge(). " ans ". "<br>";
echo $personne2->getPrenom(). " ". $personne2->getNom(). " a ". $personne2->getAge(). " ans ". "<br>";

?>