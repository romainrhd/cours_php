<?php

class Personnage
{
    public $vie = 100;

    public $agilite;

    public $force;

    public $intelligence;

    public $nom;

    public function __construct($nom, $agilite, $intelligence, $force)
    {
        $this->nom = $nom;
        $this->agilite = $agilite;
        $this->intelligence = $intelligence;
        $this->force = $force;
    }

    public function soigner($vie = null)
    {
        $this->vie += $vie;
    }

    public function getAgilite()
    {
        return 'Votre agilité est de : '. $this->agilite;
    }

    public function setAgilite($agilite)
    {
        $this->agilite = $agilite;
        $this->vie--;
    }
}