<h1>Exercice 6</h1>

<p>
Créer une fonction personnalisée permettant de remplir une liste déroulante
à partir d'un tableau de valeurs. <br>
Exemple :<br>
$elements = array("Monsieur","Madame","Mademoiselle");<br>
alimenterListeDeroulante($elements);
</p><br>

<h2>Résultat</h2>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");


function alimenterListeDeroulante($elements){

    // Liste déroulante en HTML
    echo '<form action="">
            <label for="elements"></label>
            <select name="elements" id="elements">';
            foreach($elements as $genre) {
                echo '<option value="'.$genre .'">'.$genre .'</option>';
            }
            '</select>
        </form>';
}

alimenterListeDeroulante($elements);