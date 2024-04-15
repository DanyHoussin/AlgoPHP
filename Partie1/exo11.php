<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme 
    permettant de parcourir ce tableau et d’en afficher le contenu (une 
    marque de voiture par ligne). Il est également demandé d’afficher le 
    nombre de marques de voitures présentes dans le tableau.
</p>

<h2>Résultat</h2>

<?php

$marques = ["Peugot", "Renault", "BMW", "Mercedes", "Tesla", "Toyota"];
$nbmarques = count($marques);

echo "Il y a $nbmarques  marques de voitures dans le tableau :<br>";

// Déroule la liste des marques
foreach ($marques as $liste) {
    echo " - $liste  <br>";
}

?>