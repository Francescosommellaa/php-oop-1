<?php

// dichiaro la classe Movie
class Movie
{

    // definisco i campi obbligatori
    public $title;
    public $description;
    public $regista;
    public $immage;

    // faccio in modo che la classe Movie accetti più di un valore per il genere
    public $generi = [];


    // definisco il costruttore
    function __construct($_title, $_description, $_regista, $_immage, $_generi = [])
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->regista = $_regista;
        $this->generi = $_generi;
        $this->immage = $_immage;
    }

    // creo un metodo per stampare le informazioni del film
    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getRegista()
    {
        return $this->regista;
    }

    public function getgeneri()
    {
        return $this->generi;
    }

    public function getImmage()
    {
        return $this->immage;
    }
}
