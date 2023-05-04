<?php

require __DIR__ . '/Models/movie.php';

$starWars = new Movie('Star Wars', 'Fantascienza', 'LucasFilms', '1985', 'USA', '4.8', 'English' );

echo $starWars->getMovieInfo();

?>