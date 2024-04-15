<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$NbArticle = 13;
$prixArticle = 1.99;
$TVA = 1.2;
$nombre = $NbArticle * $prixArticle;
$AvecTVAmaldetete = $nombre * $TVA;
$AvecTVA = number_format($AvecTVAmaldetete, 2, ',', ' ');


echo "$NbArticle  article(s) acheté(s) pour $prixArticle  euros, cela fera un total de $nombre euros, excluant les taxes.<br>";
echo "Si on compte la TVA qui est de 20%, cela coutera $AvecTVA  euros.<br>";


