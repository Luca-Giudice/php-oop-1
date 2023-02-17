<?php

class Movie {
    public $genere;
    public $lingua;



    public function __construct($genere,$lingua)
    {
        $this->genere = $genere;
        $this->lingua = $lingua; 
    }
}