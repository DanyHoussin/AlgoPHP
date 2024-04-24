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
    echo '<form action="">
            <input type="checkbox" id="Choix1" name="Choix1" value="Choix 1">
            <label for="Choix1"> Choix 1</label><br>
            <input type="checkbox" id="Choix2" name="Choix2" value="Choix 2">
            <label for="Choix2"> Choix 2</label><br>
            <input type="checkbox" id="Choix3" name="Choix3" value="Choix 3">
            <label for="Choix3"> Choix 3</label><br><br>
        </form>';
}

genererCheckbox($elements);