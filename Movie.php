<?php
class Movie
{
    public $title;
    public $genere;
    public $lingua;



    public function __construct($title, $genere, $lingua)
    {
        $this->title = $title;
        $this->genere = $genere;
        $this->lingua = $lingua;
    }

    public function getDetails()
    {
        $genere = $this->genere->name;
        return "Titolo: $this->title Genere: $genere Lingua: $this->lingua";
    }
}