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
        // $arme1 = new Arme("Epée", "Une superbe épée tranchante",10); PAS BESOIN DE LES RECUPERER DANS UNE VARIABLE CAR ON VA LES RECUPERER DANS LE TABLEAU STATIC
        new Arme("Epée", "Une superbe épée tranchante",10);
        new Arme("Hache", "Une arme ou un outil",15);
        new Arme("Arc", "Une arme à distance",7);

    }
    public static function getArmeByNom($nom){
        foreach(self::$armesArray as $arme){
            if(strtolower(str_replace("é", "e", $arme -> nom)) === $nom){
                return $arme;
            }
        }

    }

}
