<?php
include __DIR__.'/../Models/Movie.php';

$movies = [
    new Movie('Forrest Gump', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pGZqc9jQ6F8klQZKm37NAAMH70o.jpg', '4.6', new Genre('Drammatico')),
    new Movie('Pulp Fiction', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9p10J9Xp7MuaVac56g8BwAuXEsA.jpg', '4.2', new Genre('Thriller')),
    new Movie('Via Col Vento', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg', '8.6', new Genre('Romantico')),
    new Movie('Psycho', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tdqX0MWaFHuGwUygYn7j6eluOdP.jpg', '9.4', new Genre('Horror'))
];






