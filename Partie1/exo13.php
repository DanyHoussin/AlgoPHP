<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

$notes = [12, 14, 9, 8, 19, 17.25];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes); // additionnement des nombres dans le tableau
$moyenne = round($sommeNotes / $nbNotes, 2); // Arrondissement à 0,01

echo "Les notes obtenues par l’élève sont :";
for ($i = 0; $i < $nbNotes; $i++) { 
    echo " $notes[$i] ";
}
echo "<br>";
echo "Sa moyenne générale est donc de : $moyenne"

?>