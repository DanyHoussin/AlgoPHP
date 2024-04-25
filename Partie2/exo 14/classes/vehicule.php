<?php

class vehicule {

    // Attributs de la classe :
    private string $_marque;
    private string $_modele;

    // Permet d'initialiser les valeurs des attributs en haut (Constructeur) :
    // [ this-> ] = prend l'attribut, la variable ou la fonction de la classe actuel.
    public function __construct(string $marque, string $modele) {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    // Renvoie la valeur de l'attribut ($_marque)
    public function getMarque() {
        return $this->_marque;
    }
    // Pareil mais avec l'attribut ($_modele)
    public function getModele() {
        return $this->_modele;
    }

    
    // Remplace l'attribut de "_marque" par un nouveau nom.
    public function setMarque(string $marque) {
        $this->_marque = $marque;
    }
    // Pareil mais avec le modele
    public function setModele(string $modele) {
        $this->_modele = $modele;
    }

    public function getInfos(){
        return "Info véhicule<br>*****************<br>Nom et modèle du véhicule : ". $this->_marque. " ".$this->_modele ."<br>";
    }
    
}

class vehiculeElec extends vehicule {
    private int $_autonomie;

    public function __construct(string $marque, string $modele, int $autonomie) {
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }

    public function getAutonomie() {
        return $this->_autonomie;
    }

    public function setAutonomie(int $autonomie) {
        $this->_autonomie = $autonomie;
    }

    public function getInfos(){
        return parent::getInfos(). "Le véhicule a une autonomie de ". $this->_autonomie ." Ah<br>";
    }
}

?>