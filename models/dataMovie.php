<?php

$starGenre = new Genres('Fantascienza', 'Politico','Per il Cinema');
$starWars = new Movie('Star Wars', $starGenre, 'LucasFilms', '1985', 'USA', '4.8', 'English' );

$pulpGenre = new Genres('Gangster', 'Pulp','Per il Cinema');
$pulp = new Movie('Pulp Fiction', $pulpGenre, 'Sony', '2000', 'USA', '4.5', 'English' );

$wireGenre = new Genres('Drammatico', 'Poliziesco','Per la TV');
$wire = new Movie('The Wire', $wireGenre, 'HBO', '2000', 'USA', '4.7', 'English' );

$witcherGenre = new Genres('Fantasy', 'Drammatico','TV Series');
$theWitcher = new Movie('The Witcher', $witcherGenre, 'Netflix', '2020', 'USA, Europe', '4.1', 'English' );

$titanicGenre = new Genres('Drammatico', 'Romantico','Per il Cinema');
$titanic = new Movie('Titanic', $titanicGenre, '20th Century Fox', '1997', 'USA', '4.4', 'English' );

$paraGenre = new Genres('Drammatico', 'Denuncia Sociale','Per il Cinema');
$parasite = new Movie('Parasite', $paraGenre, 'CJ Entertainment', '2019', 'Corea del Sud', '4.7', 'Coreano' );

$stellarGenre = new Genres('Fantascienza', 'Apocalisse','Per il Cinema');
$stellar = new Movie('Interstellar', $stellarGenre, 'Legendary Pictures', '2014', 'USA', '4.9', 'English' );

$kirkGenre = new Genres('Guerra', 'Storico','Per il Cinema');
$dunkirk = new Movie('Dunkirk', $kirkGenre, 'Warner Bros. Pictures', '2017', 'UK', '3.9', 'English' );

$movieList = [
    [
        $starGenre,
        $starWars
    ],
    [
        $pulpGenre,
        $pulp
    ],
    [
        $wireGenre,
        $wire
    ],
    [
        $witcherGenre,
        $theWitcher
    ],
    [
        $titanicGenre,
        $titanic
    ],
    [
        $paraGenre,
        $parasite
    ],
    [
        $stellarGenre,
        $stellar
    ],
    [
        $kirkGenre,
        $dunkirk
    ]
];