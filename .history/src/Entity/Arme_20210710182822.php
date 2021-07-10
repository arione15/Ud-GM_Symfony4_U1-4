<?php

namespace App\Entity;


class Arme
{
    public $nom;
    public $description;
    public $degat;
    public static $armesArray = [];

    public function __construct($nom, $description, $degat){
        $this -> nom = $nom;
        $this -> description = $description;
        $this -> degat = $degat;
        self:: armesArray = $this;
    }

    public static function creerArme(){
        $arme1 = new Arme("Epée", "Une superbe épé tranchante",10);
        $arme2 = new Arme("Hache", "Une arme ou un outil",15);
        $arme3 = new Arme("Epée", "Une arme à distance",7);

    }
}
