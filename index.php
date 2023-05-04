<?php

require __DIR__ . '/Models/movie.php';
require __DIR__ . '/Models/genres.php';

$starGenre = new Genres('Fantascienza', 'Politico','Per il Cinema');
$starWars = new Movie('Star Wars', $starGenre, 'LucasFilms', '1985', 'USA', '4.8', 'English' );



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php
        echo $starWars->getMovieInfo();
    ?>
    <h3>Genere</h3>
    <?php
        echo $starWars->getGenreInfo();
    ?>
</body>
</html>