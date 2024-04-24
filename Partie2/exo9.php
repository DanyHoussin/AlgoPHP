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
    echo '<form action="/action_page.php">
            <input type="radio" id="masculin" name="genre" value="masculin">
            <label for="masculin">Masculin</label><br>
            <input type="radio" id="féminin" name="genre" value="féminin">
            <label for="féminin">Féminin</label><br>
            <input type="radio" id="autre" name="genre" value="autre">
            <label for="autre">Autre</label><br><br>
    </form>';
}
afficherRadio($nomsRadio);