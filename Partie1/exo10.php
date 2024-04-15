<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, 
    écrire l’algorithme qui affiche à un utilisateur un rendu de rendu en 
    nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<h2>Résultat</h2>

<?php

$montantapayer = 152; 
$sommeversee = 200; 

// Calculer la monnaie à rendre
function monnaierendu($montantapayer, $sommeversee) {  
    $rendu = $sommeversee - $montantapayer;
    echo "Montant à payer : $montantapayer  €<br>";
    echo "Montant versé : $sommeversee  €<br>";
    echo "Reste à payer : $rendu  €<br>";

    // Calculer le rendu de monnaie en fonction des billets disponible
    $billets10 = intdiv($rendu, 10); 
    $rendu = $rendu - 10 * $billets10;
    $billets5 = intdiv($rendu, 5);
    $rendu = $rendu - 5 * $billets5;
    $pieces2 = intdiv($rendu, 2);
    $rendu = $rendu - 2 * $pieces2;
    $pieces1 = $rendu;

    echo "***************************************************<br>";
    echo "Rendue de monnaie : <br>";
    echo "$billets10 billet(s) de 10€ - ";
    echo "$billets5 billet(s) de 5€ - ";
    echo "$pieces2 pièce(s) de 2€ - ";
    echo "$pieces1 pièce(s) de 1€";
}


monnaierendu($montantapayer, $sommeversee); // Applique la fonction monnaierendu

?>