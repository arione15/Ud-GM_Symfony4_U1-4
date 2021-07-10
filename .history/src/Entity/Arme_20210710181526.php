<?php

namespace App\Entity;


class Arme
{
    public $nom;
    public $description;
    public $degat;

    public function __construct($nom, $description, $degat){
        $this -> nom = $nom;

    }
}
