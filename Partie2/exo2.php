<h1>Exercice 2</h1>

<p>
Soit le tableau suivant :<br>
$capitales = array <br>
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez 
que le nom du pays s’affichera en majuscule et que le tableau est trié par 
ordre alphabétique du nom de pays) grâce à une fonction personnalisée.<br>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales)
</p><br>

<h2>Résultat</h2>

<?php

$capitales = array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
);

function afficherTableHTML($capitales) {
    //  Permet d'alligner les pays par ordre alphabétique
    ksort($capitales);

    // Tableau HTML avec bordure
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <tH>Capitales</th>
                    </tr>
                </thead>
            <tbody>";
    foreach($capitales as $pays => $ville) {
        $paysMaj = strtoupper($pays); 

        // .= est équivanlent au . entre deux valeurs
        $result .= "<tr>
                        <td>$paysMaj</td>
                        <td>$ville</td>
                    </tr>";
    }

    $result .= "</tbody></table>";
    echo $result;
}

afficherTableHTML($capitales);

?>
