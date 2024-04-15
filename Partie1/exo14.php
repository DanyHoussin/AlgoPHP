<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

$datenaissance = "2004-12-01";

// Initialise la date d'aujourd'hui dans une variable
$date = new DateTime();
// Initialise la date de naissance dans une variable
$date2 = new DateTime($datenaissance);
// [ $dateajd = $date->format('y-m-d') ] Permet de choisir le format à afficher (y = année, m = mois, d = jours)
// Fait la différence entre la première date et la deuxième. (true = valeur absolue)
$age = $date->diff($date2, true); 

echo "Si la personne est née le $datenaissance  alors <br>";
echo "L'âge de la personne sera de : {$age->y} ans {$age->m} mois {$age->d} jours.";
?>