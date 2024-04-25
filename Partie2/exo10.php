<h1>Exercice 10</h1>

<p>
En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer
un formulaire complet qui contient les informations suivantes : champs de 
texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix 
parmi lesquels on pourra sélectionner un intitulé de formation : <br>
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de 
projet ».<br>

Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).
</p><br>

<h2>Résultat</h2>

<?php

function formulaire() {
    $nomsInput = array("Nom","Prénom","Ville", "Adresse Mail", "Sexe");
    foreach($nomsInput as $info) {
        echo "$info <br>";
        echo '<input type="text"></input><br>';
    }
    
    $job = array("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");

    echo '<form action="">
            <label for="formation"></label>
            <select name="formation" id="formation">';
                foreach($job as $liste) {
                    echo '<option value="'.$liste .'">'.$liste .'</option>';
                }
            '</select>
        </form>';
}

formulaire();