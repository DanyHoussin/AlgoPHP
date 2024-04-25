<h1>Exercice 9</h1>

<p>
Créer une fonction personnalisée permettant d’afficher des boutons radio avec
un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
Exemple :<br>
afficherRadio($nomsRadio);
</p><br>

<h2>Résultat</h2>

<?php

$nomsRadio = array("Masculin","Féminin","Autre");


function afficherRadio($nomsRadio){

    // Liste radio en HTML
    echo '<form action="/action_page.php">';
            foreach($nomsRadio as $genre) {
                echo '<input type="radio" id="'.$genre.'" name="genre" value="'.$genre.'">';
                echo '<label for="'.$genre.'">'.$genre.'</label><br>';
            }
        '</form>';
}
afficherRadio($nomsRadio);