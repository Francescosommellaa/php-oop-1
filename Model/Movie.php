<?php

// dichiaro la classe Movie
class Movie
{

    // definisco i campi obbligatori
    public $title;
    public $description;
    public $director;

    // definisco il costruttore
    function __construct($_title, $_description, $_director)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->director = $_director;
    }

    // creo un metodo per stampare le informazioni del film
    public function getInfo()
    {
        return "Titolo: " . $this->title . "<br>Descrizione: " . $this->description;
    }
}
