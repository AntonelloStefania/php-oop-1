<?php
require __DIR__.'/models/classes.php';
require __DIR__.'/models/movies.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Movies</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-3 mb-5">
                <h1>MovieDB</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 h-100">
                <ul class="h-100 col-12 justify-content-center">
                <?php  foreach ($MoviesArray as $movie ) { ?>
                    <li  class="card my-2 mx-1 py-3  movie-card col-12 col-md-5  ">
                        <div class="text-center">
                            <h4 >Title: <?php echo $movie->title ?></h4>
                        </div>
                        <div class="card-content px-2">
                            <div class="mt-3">
                                <ul class=" d-flex justify-content-center">
                                    <li><?php echo $movie->year.' - '.$movie->classic?></li>
                                </ul>
                            </div>

                            <div class="mt-3 ps-4">
                                <h6>Genre:</h6>
                                <ul class="ps-2 d-flex flex-column">
                                    <?php foreach($movie->genre->genres as $genres) {?>
                                        <li class="">
                                            <?php echo $genres.';'?>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                            <div class="mt-3 ps-4">
                                <h6>Director:</h6>
                                <ul class="ps-2 mb-2">
                                    <li><?php echo $movie->director?></li>
                                </ul>
                                <h6>Publisher:</h6>
                                <ul class="ps-2">
                                    <li><?php echo $movie->publisher?></li>
                                </ul>
                            </div>
                            <div class="mt-3 ps-4">
                                <h6>Main Actors:</h6>
                                <ul  class="d-flex flex-column ps-2">
                                    <?php foreach($movie->actors->actors as $actors) {?>
                                        <li>
                                            <?php echo $actors.';'?>
                                        </li> 
                                   <?php }?>
                                </ul>
                            </div>
                        </div>

                    </li>
                <?php }?>
                </ul>
            </div>
        </div>
    </div>
    
</body>
</html>