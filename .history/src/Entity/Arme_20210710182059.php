<?php

namespace App\Entity;


class Arme
{
    public $nom;
    public $description;
    public $degat;

    public function __construct($nom, $description, $degat){
        $this -> nom = $nom;
        $this -> description = $description;
        $this -> degat = $degat;
    }

    public static function creerArme(){
        $arme1 = [
            "nom" => "Epée",
            "description" => "Une superbe épé tranchante",
            "degat" => 10
        ]
        $arme2 = [
            "nom" => "Hache",
            "description" => "Une arme ouUne superbe épé tranchante",
            "degat" => 10
        ]
        $arme1 = [
            "nom" => "Epée",
            "description" => "Une superbe épé tranchante",
            "degat" => 10
        ]
    }
}
