<?php

namespace App\Entity;


class Arme
{
    private $nom;
    private $description;
    private $degat;

    public static $armesArray = [];

    public function __construct($nom, $description, $degat)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->degat = $degat;
        self::$armesArray[] = $this;
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

    /**
     * Get the value of degat
     */
    public function getDegat()
    {
        return $this->degat;
    }

    /**
     * Set the value of degat
     *
     * @return  self
     */
    public function setDegat($degat)
    {
        $this->degat = $degat;

        return $this;
    }

    

    public static function getArmeByNom($nom)
    {
        foreach (self::$armesArray as $arme) {
            if (strtolower(str_replace("é", "e", $arme->nom)) === $nom) {
                return $arme;
            }
        }
    }
}