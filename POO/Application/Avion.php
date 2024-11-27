<?php

Class Avion extends Vehicule{
    public string $_marque;
    public string $_modele;
    public int $_kilometrage;
    public int  $_vitesseMax;
    public int $_cylindre;

    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
	{
		foreach($donnees as $key => $value)
		{
			$method = 'set'.ucfirst($key);
                if(method_exists($this, $method))
                {
                    $this->$method($value);
                }
		}
	}

    public function deplace() {
        echo"Je vole";
    }
    public function accelere () {
        echo"Je pousse la manette des gaz très fort";
    }
     
    public function freine () {
        echo "J'inverse la poussée";
    }
     
    public function bruit () {
        echo "Bruit de réacteur";
    }

    public function setMarque(string $marque){

        $this->_marque=$marque;
    }
    
    public function get_Marque(){
    
        return $this->_marque;
    }
    
    public function setModele(string $modele){

        $this->_modele=$modele;
    }
    
    public function get_Modele(){
    
        return $this->_modele;
    }
    
    
    public function setKilometrage(int $kilometrage){
    
        $this->_kilometrage=$kilometrage;
    }
    
    public function get_Kilometrage(){
    
        return $this->_kilometrage;
    }
    
    public function setVitesseMax(int $vitesseMax){
    
        $this->_vitesseMax=$vitesseMax;
    }
    
    public function get_VitesseMax(){
    
        return $this->_vitesseMax;
    }
    
    public function setCylindre(int $cylindre){
    
        $this->_cylindre=$cylindre;
    }
    
    public function get_Cylindre(){
    
        return $this->_cylindre;
    }
    
    
}