<?php

require __DIR__ . '/Models/movie.php';
require __DIR__ . '/Models/genres.php';
require __DIR__ . '/Models/dataMovie.php';


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
    <div class="container">
                <?php foreach($movieList as $movie) { ?>
                    <div class="cardMovie">
                        <?php
                            echo $movie[0]->getMovieInfo();
                        ?>
                        <h3>Genere</h3>
                        <?php
                            echo $movie[1]->getGenreInfo();
                        ?>
                    </div>
                <?php } ?>
        </div>
    </div>
</body>
</html>