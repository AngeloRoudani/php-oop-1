<?php

class Genres {
    public $genreName;
    public $subgenre;
    public $destination;

    public function __construct($genreName, $subgenre, $destination ) {
        
        $this->genreName = $genreName;
        $this->subgenre = $subgenre;
        $this->destination = $destination;
        

    }
}