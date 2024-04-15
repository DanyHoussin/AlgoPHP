<?php

class Personne {

    // Attributs de la classe :
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;

    // Permet d'initialiser les valeurs des attributs en haut (Constructeur) :
    // [ this-> ] = prend l'attribut, la variable ou la fonction de la classe actuel.
    public function __construct(string $nom, string $prenom, $dateNaissance) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    // Renvoie la valeur de l'attribut ($_nom)
    public function getNom() {
        return $this->_nom;
    }
    // Pareil mais avec l'attribut ($_prenom)
    public function getPrenom() {
        return $this->_prenom;
    }
    // Pareil mais avec l'attribut ($_dateNaissance)
    public function getdateNaissance() {
        return $this->_dateNaissance;
    }
     // Calcule l'âge de la personne en fonction de ca date de naissance
    public function getAge() {
        $age = (new DateTime())->diff($this->_dateNaissance, true);
        return $age->y;
    }

    public function displayInfos(){
        return $this->_prenom. "  ". $this->_nom." a {$this->getAge()} ans";
    }

    // Remplace l'attribut de "_nom" par un nouveau nom.
    public function setNom(string $nom) {
        $this->_nom = $nom;
    }
    // Pareil mais avec le prénom
    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }
    // Pareil mais avec la date de naissance
    public function setdateNaissance(DateTime $dateNaissance) {
        $this->_dateNaissance = $dateNaissance;
    }

    
}

?>