<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son 
    âge et de son sexe.<br>
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans 
    ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable 
    (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>Résultat</h2>

<?php

$age = 15;
$genre = "femme";
$genremini = strtolower($genre);


if(gettype($age) == "integer") { // Si le type de variable est une entier (integer)
    if(gettype($genre) == "string") { // Si le type de variable est une chaine de caractère (string)
        if(($genremini === "homme" AND $age >= 20) || ($genremini === "femme" AND $age >= 18 AND $age <= 35)) {
                // Si l'homme à un age compris égal ou supérier à 20 ans OU si la femme à un age compris entre 18 et 35 ans alors...
                echo "La personne est imposable";
        } else {
                echo "La personne est non imposable";
        }
    } else {
        echo "Quel genre êtes-vous ?";
    }
} else {
    echo "Quel âge avez-vous ?";
}

?>