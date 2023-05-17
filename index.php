<?php
    include __DIR__.'/Database/db.php';
    // var_dump($movies);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Movies</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>Movies</h1>
            <div class="row">
                <?php foreach($movies as $movie) : ?>
                    <div class="col-6">
                        <div class="card my-3">
                            <div class="card-img-top">
                                <img src="<?= $movie->image ?>" alt="<?= $movie->title?>">
                            </div>
                            <div class="card-body">
                                <h2><?= $movie->title?></h2>
                                <p><?= $movie->getDetails() ?></p> 
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>
</html>
