<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance)<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</p>

<h2>Résultat</h2>

<?php

// Autochargement des classes depuis les dossiers spécifiés
spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

// [ $p1-> ] = prend l'attribut, la variable ou la fonction de la classe.
echo $p1->displayInfos()."<br>";
echo $p2->displayInfos()."<br>";
?>