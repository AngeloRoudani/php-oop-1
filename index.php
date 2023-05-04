<?php

require __DIR__ . '/Models/movie.php';

$starWars = new Movie('Star Wars', 'Fantascienza', 'LucasFilms', '1985', 'USA', '4.8', 'English' );


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
</body>
</html>