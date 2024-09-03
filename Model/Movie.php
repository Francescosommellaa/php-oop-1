<?php

// dichiaro la classe Movie
class Movie
{

    // definisco i campi obbligatori
    public $title;
    public $description;
    public $regista;

    // faccio in modo che la classe Movie accetti più di un valore per il genere
    public $generi = [];


    // definisco il costruttore
    function __construct($_title, $_description, $_regista, $_generi = [])
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->regista = $_regista;
        $this->generi = $_generi;
    }

    // creo un metodo per stampare le informazioni del film
    public function getInfo()
    {
        return "Titolo: " . $this->title . "<br>Descrizione: " . $this->description . "<br>Generi: " . implode(", ", $this->generi);
    }
}
