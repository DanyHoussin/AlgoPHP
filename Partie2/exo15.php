<h1>Exercice 15</h1>

<p>
En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.
</p><br>

<h2>Résultat</h2>

<?php

$email1 = "john.doe@example.com";

// FILTER_VALIDATE_EMAIL permet de determiner si la variable $email1 respecte le format d'un e-mail
if (filter_var($email1, FILTER_VALIDATE_EMAIL)) {
echo "L'adresse $email1  est une adresse e-mail valide<br>";
} else {
echo "L'adresse $email1  est une adresse e-mail invalide<br>";
}

$email2 = "contact@elan";

if (filter_var($email2, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse $email2  est une adresse e-mail valide<br>";
    } else {
    echo "L'adresse $email2  est une adresse e-mail invalide<br>";
    }
?>