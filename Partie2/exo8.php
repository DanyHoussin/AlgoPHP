<h1>Exercice 8</h1>

<p>
Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg <br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à 
l’écran.<br>
Exemple :<br>
repeterImage($url,4)
</p><br>

<h2>Résultat</h2>

<?php

$url = "https://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($url,$nb){
    for ($x = 1; $x <= $nb; $x++) { 
        echo '<img src="'.$url.'">';
    }    
} 

repeterImage($url,6);