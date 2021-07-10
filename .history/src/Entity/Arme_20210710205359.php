<?php

namespace App\Entity;


class Arme
{
    private $nom;
    private $description;
    private $degat;
    public static $armesArray = [];

    public function __construct($nom, $description, $degat){
        $this -> nom = $nom;
        $this -> description = $description;
        $this -> degat = $degat;
        self:: $armesArray[] = $this;
    }

    public static function creerArme(){
        $arme1 = new Arme("Epée", "Une superbe épée tranchante",10);
        $arme2 = new Arme("Hache", "Une arme ou un outil",15);
        $arme3 = new Arme("Arc", "Une arme à distance",7);

    }
    public static function getArmByNom($nom){
        foreach(self::$armesArray as $arme){
            if(strtolower($arme -> nom) === $nom){
                return $arme;
            }
        }

    }
    

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
