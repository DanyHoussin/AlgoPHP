<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre 
    sous la forme : <br>
    
        Affichage (pour la table de 8) :<br>
    Table de 8 :<br>
    1 x 8 = 8<br>
    2 x 8 = 16<br>
    3 x 8 = 24 …</p>

<h2>Résultat</h2>

<?php

$nombre = 5;
$multiple = 1;
$résultat = 1;

echo "Boucle while<br> Table de $nombre <br>";
// Boucle à appliquer quand on ne connait pas le résultat à l'avance.
while($multiple < 11) { 
    $résultat = $nombre * $multiple;
    echo "$multiple x $nombre  = $résultat<br>";
    $multiple = $multiple + 1;
}
echo " <br>";

$nombre = 7;
$multiple = 1;
$résultat = 1;

echo "Boucle For<br> Table de $nombre <br>";
// Boucle à appliquer quand on connait le résultat à l'avance.
for ($résultat = 1; $multiple <= 10; $résultat++) { 
    $résultat = $nombre * $multiple;
    echo "$multiple x $nombre  = $résultat<br>";
    $multiple = $multiple + 1;
}
