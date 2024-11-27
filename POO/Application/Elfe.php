<?php
class Elfe extends Personnage implements Arme, Talent {
    protected string $race;
    protected string $talents;
    protected string $hache;
   
    public function arc(){
        $this->force = 10000;
    }
    public function hache(){}
    public function epee(){}
    public function baton(){}
    public function batonMagique(){}
    public function dague(){}
    public function masse(){}
    public function cavalier(){}
    public function magicien(){}
    public function guerrier(){}
    public function necromencien(){}
    public function voleur(){}
    public function assassin(){}
 
    public function __construct(string $name) {
        $this->name = $name;
        $this->pv = 100;
        $this->armure = 120;
        $this->force = 80;
        $this->enVie = true;
}
   
        public function attaquer(){
        $this->arc();
        return $this->force;
        }

    public function setName ( string $name ) {
        $this->name = $name;
    }
    public function getName (){
        return $this->name;
    }
   
    public function setPv ( int $pv ) {
        $this->pv = $pv;
    }
    public function getPv () {
        return $this->pv;
    }
   
    public function setArmure ( int $armure ) {
        $this->armure = $armure;
    }
    public function getArmure () {
        return $this->armure;
    }
   
    public function setForce ( int $force ) {
        $this->force = $force;
    }
    public function getForce () {
        return $this->force;
    }
   
    public function setEnVie ( bool $enVie ) {
        $this->enVie = $enVie;
    }
    public function getEnVie () {
        return $this->enVie;
    } 
    
   
}