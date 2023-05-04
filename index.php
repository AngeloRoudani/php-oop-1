<?php

require __DIR__ . '/models/movie.php';
require __DIR__ . '/models/genres.php';
require __DIR__ . '/data/dataMovie.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>OOP</title>
</head>
<body>
    <div class="container">
                <?php foreach($movieList as $key =>$movie) { ?>
                    <div class="cardMovie">
                        <?php
                            echo $movie[1]->getMovieInfo();
                        ?>
                        <h3 class="genreTitle">Genere</h3>
                        <?php
                            echo $movie[1]->getGenreInfo();
                        ?>
                    </div>
                <?php } ?>
        </div>
    </div>
</body>
</html>