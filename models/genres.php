<?php

class Genres {
    public $genreName;
    public $subgenre;
    public $destination;

    public function __construct(String $genreName,String $subgenre,String $destination ) {
        
        $this->genreName = $genreName;
        $this->subgenre = $subgenre;
        $this->destination = $destination;
        

    }
}