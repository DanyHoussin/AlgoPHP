<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :<br>
Poussin : entre 6 et 7 ans<br>
Pupille : entre 8 et 9 ans<br>
Minime : entre 10 et 11 ans<br>
Cadet : à partir de 12 ans<br>
Si la catégorie n'est pas gérée, merci de le préciser</p>

<h2>Résultat</h2>

<?php

$ageenfant = 8;

if(8 > $ageenfant) { // Si l'age de l'enfant est supérieur à 8, alors...
    echo "L'enfant à $ageenfant  ans, il fait partie de la catégorie des Poussins.";
} elseif(10 > $ageenfant) { // Si l'age de l'enfant est supérieur à 10, alors...
    echo "L'enfant à $ageenfant  ans, il fait partie de la catégorie des Pupilles.";
} elseif(12 >= $ageenfant) { // Si l'age de l'enfant est supérieur à 12, alors...
    echo "L'enfant à $ageenfant  ans, il fait partie de la catégorie des Minimes.";
} else {
    echo "L'enfant à $ageenfant  ans, il fait partie de la catégorie des Cadets.";
}

?>