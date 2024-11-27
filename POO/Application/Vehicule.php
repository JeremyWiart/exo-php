<?php

abstract Class Vehicule{
    protected string $_marque;
    protected string $_modele;
    protected int $_kilometrage;
    protected int  $_vitesseMax;
    protected int $_cylindre;

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

    protected function deplace(){

    }

    protected function accelere(){

    }

    protected function freine(){

    }

    protected function bruit(){

    }



}

?>