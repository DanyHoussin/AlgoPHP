<h1>Exercice 11</h1>

<p>
Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.<br>
Exemple :<br>
formaterDateFr("2018-02-23");

</p><br>

<h2>Résultat</h2>

<?php

$date = "2018-02-23";

function formaterDateFr($date) {
    $fmt = datefmt_create(
    
        // Langue choisit
        'fr_FR',
    
        // Format
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE,
        'America/Los_Angeles',
        IntlDateFormatter::GREGORIAN
    );
    echo datefmt_format($fmt, 0);

}

formaterDateFr($date);