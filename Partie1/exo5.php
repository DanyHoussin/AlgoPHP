<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php
$francs = 121;
$toeuro = 0.15245 * $francs;
$euro = number_format($toeuro, 2, ',', ' '); // Arrondissement à 0,01
echo "La somme total en francs est de $francs .<br>";
echo "Convertit en euro, cela fait $euro  euros.";