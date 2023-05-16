<?php
    include __DIR__.'/models/Movie.php';

    $movies = [
        new Movie('Pulp Fiction', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9p10J9Xp7MuaVac56g8BwAuXEsA.jpg', '4.2', 'Thriller'),
        new Movie('Via Col Vento', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg', '8.6', 'Romantico'),
        new Movie('Forrest Gump', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pGZqc9jQ6F8klQZKm37NAAMH70o.jpg', '4.6', 'Drammatico'),
        new Movie('Psycho', 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tdqX0MWaFHuGwUygYn7j6eluOdP.jpg', '9.4', 'Horror')
    ]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <?php for($i = 0; $i < count($movies); $i++){ ?>
                    <ul>
                        <li><?php echo $movies[$i]->title ?></li>
                        <li><?php echo $movies[$i]->image ?></li>
                        <li><?php echo $movies[$i]->vote ?></li>
                        <li><?php echo $movies[$i]->genre ?></li>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
