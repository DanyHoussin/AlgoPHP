<h1>Exercice 13</h1>

<p>
Créer une classe Voiture possédant les propriétés suivantes : 
marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes
demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs 
(get) et mutateurs (set) traditionnels. La vitesse initiale de 
chaque véhicule instancié est de 0. Une méthode personnalisée 
pourra afficher toutes les informations d’un véhicule. <br>
v1 ➔ "Peugeot","408",5<br>
v2 ➔ "Citroën","C4",3<br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de 
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments 
suivants :
</p><br>

<h2>Résultat</h2>

<?php

// Autochargement des classes depuis les dossiers spécifiés
spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

$v1 = new vehicule("Peugot", "408", "5") ;
$v2 = new vehicule("Citroen", "C4", "3") ;

// [ $p1-> ] = prend l'attribut, la variable ou la fonction de la classe.


echo $v1->allumer()."<br>";
echo $v1->accelerer(50);

echo $v2->allumer()."<br>";
echo $v2->stopper()."<br>";

echo $v1->getVitesseActuelle();
echo $v2->getVitesseActuelle();
echo "----------------------------------------------<br>";
echo $v1->displayInfos()."<br>";
echo $v2->displayInfos()."<br>";


?>