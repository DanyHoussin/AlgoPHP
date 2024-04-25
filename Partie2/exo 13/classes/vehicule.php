<?php

class vehicule {

    // Attributs de la classe :
    private string $_marque;
    private string $_modele;
    private string $_nbPortes;
    private int $_vitesseActuelle;
    private string $_moteur;

    // Permet d'initialiser les valeurs des attributs en haut (Constructeur) :
    // [ this-> ] = prend l'attribut, la variable ou la fonction de la classe actuel.
    public function __construct(string $marque, string $modele, string $nbPortes) {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_moteur = "0";
    }

    // Renvoie la valeur de l'attribut ($_marque)
    public function getMarque() {
        return $this->_marque;
    }
    // Pareil mais avec l'attribut ($_modele)
    public function getModele() {
        return $this->_modele;
    }
    // Pareil mais avec l'attribut ($_nbPortes)
    public function getNbPortes() {
        return $this->_nbPortes;
    }
    // Pareil mais avec l'attribut ($_vitesseActuelle)
    public function getVitesseActuelle() {
        return "La vitesse du véhiculee ". $this->_marque ." ". $this->_modele ." est de ". $this->_vitesseActuelle ." km / h<br>";
    }


    
    // Remplace l'attribut de "_marque" par un nouveau nom.
    public function setMarque(string $marque) {
        $this->_marque = $marque;
    }
    // Pareil mais avec le modele
    public function setModele(string $modele) {
        $this->_modele = $modele;
    }
    // Pareil mais avec le nombre de porte
    public function setNbPortes(string $nbPortes) {
        $this->_nbPortes = $nbPortes;
    }
    // Pareil mais avec le nombre de porte
    public function setVitesseActuelle(int $vitesseActuelle) {
        $this->_vitesseActuelle = $vitesseActuelle;
    }



    public function allumer() {
        if($this->_moteur == "0"){
            $this->_moteur = "1";
            echo "Le véhicule ". $this->_marque ." ". $this->_modele ." démarre<br>";
        } else {
            echo "Le véhicule est déjà allumé<br>";
        }
    }
    public function stopper() {
        if($this->_moteur == "1"){
            $this->_moteur = "0";
            $this->_vitesseActuelle = 0;
            echo "Le véhicule ". $this->_marque ." ". $this->_modele ." est stoppé<br>";
        } else {
            echo "Le véhicule est déjà éteint<br>";
        }
    }

    public function accelerer(int $accelerer) {
        if($this->_moteur == "1"){
            $this->_vitesseActuelle = $this->_vitesseActuelle + $accelerer;
            echo "La vitesse du véhicule ". $this->_marque ." ". $this->_modele ." est de : ". $this->_vitesseActuelle ." km / h<br>";
        } else {
            echo "Le véhicule ". $this->_marque ." ". $this->_modele ." veut accélerer de ". $accelerer ."<br>Pour accélerer, il faut démarrer le véhicule ". $this->_marque ." ". $this->_modele ." !<br>";
        }
    }


    public function displayInfos(){
        echo "Info véhicule<br>*****************<br>Nom et modèle du véhicule : ". $this->_marque. " ".$this->_modele ."<br>Nombre de portes : ". $this->_nbPortes ."<br>Le véhicule Peugot est ";
        if($this->_moteur == 1) {
            echo "démarré";
        } else {
            echo "éteint";
        }
        return "<br>Sa vitesse actuelle est de : ". $this->_vitesseActuelle ."<br>";
    }
    
}

?>