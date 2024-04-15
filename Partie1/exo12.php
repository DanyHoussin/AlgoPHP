<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms
     et de langue associée (tableau contenant clé et valeur), dire bonjour
      aux différentes personnes dans leur langue respective (français ➔ 
      « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>

<h2>Résultat</h2>

<?php

$personnes = [
    "Dany" => "FRA",
    "Piseth" => "ENG",
    "Hok" => "ESP"
];


foreach($personnes as $prenom => $langue) { 
// Dans le tableau "personnes" : les mots contenue à 
// gauche font partie de la variable $prenom et les mots à droite fait partie de la 
// variable $langue.
    if($langue == "FRA") {
        echo "Salut $prenom  <br>";
    } elseif($langue == "ENG") {
        echo "Hello $prenom  <br>";
    } elseif($langue == "ESP") {
        echo "Hola $prenom  <br>";
    }

}


















// foreach($personnes as $prenom => $langue) {
// }
// foreach($langues as $langue => $dire) {
// }

// function random() : string {
//     $langue = $dire;
//     foreach($personnes as $prenom => $langue) {
//     return $dire;
// }
// }

// for($i = 0; $i <= count($personnes); $i++) {
//         echo "$personnes  -> ".random()."<br>";
// }
        

// foreach($langues as $langue => $dire) {
//     echo $langue." -> ".mb_strtolower($dire)."<br>";
// }


?>