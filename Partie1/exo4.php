<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php
$phrase = "Bon sport, trop snob";

// Remplace tout les espaces par un vide.
$phrasecoller = str_replace(" ", "", $phrase); 

// Remplace toutes les virgules par un vide.
$phrasesansvirgule = str_replace(".", "", $phrasecoller); 

// Remplace tout les points par un vide.
$phrasesanspoint = str_replace(",", "", $phrasesansvirgule); 

// Phrase ou mot, contenue dans une variable, en minuscule.
$phrasemin = strtolower($phrasesanspoint); 

// Inverse la phrase ou le mot.
$phraseinverse =  strrev($phrasemin); 

// Si la phrase en reverse correspond à la phrase en minuscule
if ($phraseinverse === $phrasemin) { 
    echo "la phrase « $phrase  » est palindrome";
} else {
    echo "La phrase « $phrase  » n'est pas palindrome";
}