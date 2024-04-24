<h1>Exercice 5</h1>

<p>
Créer une fonction personnalisée permettant de créer un formulaire de champs 
de texte en précisant le nom des champs associés.
</p><br>

<h2>Résultat</h2>

<?php

$nomsInput = array("Nom","Prénom","Ville");


function afficherInput($nomsInput) {
    foreach($nomsInput as $info) {
        echo "$info <br>";

        //Input Zone de texte
        echo '<input type="text"></input><br>';
    }
}


afficherInput($nomsInput);