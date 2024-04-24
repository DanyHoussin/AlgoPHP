<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de 
transformer une chaîne de caractère passée en argument en majuscules et 
en rouge.<br>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;<br>
</p>

<h2>Résultat</h2>


<!-- (Méthode 2) -->
<style>
    .red{
        color:red;
    }
</style>

<?php

$texte = "MON TEXTE EN PARAMETRE";

function convertirMajRouge($texte) {
    // Transformmer le texte en rouge
    // Méthode 1 :
    $EnRouge = '<span style="color: red;">'. $texte .'</span>';

    // Méthode 2 :
    $EnRouge = "<p class='red'>$texte</p>";

    return $EnRouge;
}

echo convertirMajRouge($texte);

