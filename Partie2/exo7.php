<h1>Exercice 7</h1>

<p>
Créer une fonction personnalisée permettant de générer des cases à cocher.
On pourra préciser dans le tableau associatif si la case est cochée ou non. <br>

Exemple :<br>
genererCheckbox($elements);<br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p><br>

<h2>Résultat</h2>

<?php

$elements = array("Choix 1","Choix 2","Choix 3");


function genererCheckbox($elements){

    // Liste Checkbox en HTML
    echo '<form action="">';
            foreach($elements as $valeur) {
                echo '<input type="checkbox" id="'.$valeur .'" name="'.$valeur .'" value="'.$valeur .'">';
                echo '<label for="'.$valeur .'">'.$valeur .'</label><br>';
            }
        '</form>';
}
genererCheckbox($elements);