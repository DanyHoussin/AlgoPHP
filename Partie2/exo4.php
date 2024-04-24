<h1>Exercice 4</h1>

<p>
A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau 
HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale 
(le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera 
trié par ordre alphabétique de la capitale). <br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
https://fr.wikipedia.org/wiki/<b>
Le tableau passé en argument sera le suivant :<b>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

</p><br>

<h2>Résultat</h2>

<?php

$capitales = array (
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
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
                        <th>Lien Wiki</th>
                    </tr>
                </thead>
            <tbody>";
    foreach($capitales as $pays => $ville) {
        $paysMaj = strtoupper($pays); 

        // .= est équivanlent au . entre deux valeurs
        $result .= '<tr>
                        '."<td>$paysMaj</td>".'
                        '."<td>$ville</td>".'
                        <td><a href="https://fr.wikipedia.org/wiki/'."$ville".'" target="_blank">Lien</a>
                    </tr>';
    }

    $result .= "</tbody></table>";
    echo $result;
}

afficherTableHTML($capitales);