<?php
class Elfe extends Personnage implements Arme, Classe {
    protected string $race;
    protected string $talents;
    protected string $hache;
   
    public function arc(){
        $this->force = 120;
    }
    public function hache(){
        $this->force = 100;
    }
    public function epee(){
        $this->force = 120;
    }
    public function baton(){
        $this->force = 60;
    }
    public function batonMagique(){
        $this->force = 100;
    }
    public function dague(){
        $this->force = 90;
    }
    public function masse(){
        $this->force = 110;
    }
   
    public function cavalier(){}
    public function magicien(){}
    public function guerrier(){}
    public function necromencien(){}
    public function voleur(){}
    public function assassin(){}
 
    public function __construct(string $name) {
        $this->name = $name;
        $this->pv = 100;
        $this->armure = 200;
        $this->force = 80;
        $this->enVie = true;
        $this->race = "Elfe";

}
   
        public function attaquer(){
        $this->arc();
        return $this->force;
        }

        public function defendre(){
            return $this->armure;
        }

        public function deceder(){

        }
    
        public function crashTheGameIfLoose(){
    
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
    
      public function setRace ( string $race ) {
        $this->race = $race;
    }
    public function getRace () {
        return $this->race;
    } 
}