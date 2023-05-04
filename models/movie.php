<?php

class Movie {
    public $title;
    public $genre;
    public $productionHouse;
    public $releaseDate;
    public $productionCountry;
    public $vote;
    public $originalLanguage;


    public function __construct($title, $genre, $productionHouse, $productionCountry, $releaseDate, $vote, $originalLanguage ) {
        
        $this->title = $title;
        $this->genre = $genre;
        $this->productionHouse = $productionHouse;
        $this->productionCountry = $productionCountry;
        $this->releaseDate = $releaseDate;
        $this->vote = $vote;
        $this->originalLanguage = $originalLanguage;

    }

    public function getMovieInfo() {
        return '<h1>'. $this->title . '</h1>
                <div>'. $this->genre . '</div>
                <div>'. $this->productionHouse . '</div>
                <div>'. $this->productionCountry . '</div>
                <div>'. $this->releaseDate . '</div>
                <div>'. $this->vote . '</div>
                <div>'. $this->originalLanguage . '</div>';
    }

}