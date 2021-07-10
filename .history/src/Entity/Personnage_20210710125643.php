<?php

namespace App\Entity;

class Personnage
{
    public $nom;
    public $age;
    public $sexe;
    public $carac = [];

    public static $pers = [];

    public function __construct($nom, $age, $sexe, $carac)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;

        self::$pers[] = $this;
    }

    public static function creerPersonnage()
    {
        $p1 = new Personnage("Marc", 35, true, [
            "force" => 3,
            "agil" => 2,
            "intel" => 3
        ]);
        $p2 = new Personnage("Milo", 25, true, [
            "force" => 2,
            "agil" => 4,
            "intel" => 2
        ]);
        $p3 = new Personnage("Tya", 15, true, [
            "force" => 1,
            "agil" => 5,
            "intel" => 1
        ]);
    }
    public static function getPersonnageParNom($name)
    {
        foreach(self::$pers as $person){
            if(strtolower($person -> nom) === $name){
                return $person;
            }
        }
        
    }
}
