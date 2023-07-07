<?php
 class Movie{
    public $title;
    public $genre;
    public $year;
    public $publisher;
    public $director;
    public $actors;

    function __construct($title, Genre $genre, $year, $director, $publisher ,$actors){
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->publisher = $publisher;
        $this->director = $director;
        $this->actors = $actors;
    } 
       
 }
 class Genre{
    public $genres;
   

    function __construct(...$genres){
        $this->genres = $genres;
    }
 }

 class Actors{
    public $actors;

    function __construct(...$actors){
        $this->actors = $actors;
    }
 }



 $Avenged_genre=new Genre('Action','Adventure','Sci Fi');
 $Avenged_actors = new Actors('Robert Downey Jr', 'Chris Evans', 'Scarlett Johansson');
 $movie_Avenger= new Movie('The Avengers', $Avenged_genre,'2012','Joss Whedon', 'Marvel Studios',$Avenged_actors);

 $TheShawshankRedemption_genre = new Genre('Drama', 'Crime');
 $TheShawshankRedemption_actors = new Actors('Tim Robbins', 'Morgan Freeman', 'Bob Gunton');
 $movie_TheShawshankRedemption = new Movie('The Shawshank Redemption', $TheShawshankRedemption_genre, '1994', 'Frank Darabont', 'Castle Rock Entertainment', $TheShawshankRedemption_actors );

 $TheLordOfTheRings_genre= new Genre('Adventure', 'Fantasy', 'Action');
 $TheLordOfTheRings_actors= new Actors('Elijah Wood', 'Ian McKellen', 'Viggo Mortensen');
 $movie_TheLordOfTheRing=new Movie('The Lord of the Rings: The Fellowship of the Ring',$TheLordOfTheRings_genre,'2001','Peter Jackson','New Line Cinema', $TheLordOfTheRings_actors);

 $LaLaLand_genre= new Genre('Romance','Drama','Musical');
 $LaLaLand_actors= new Actors( 'Ryan Gosling', 'Emma Stone', 'John Legend');
 $movie_LaLaLand= new Movie('La La Land', $LaLaLand_genre, '2016','Damien Chazelle','Summit Entertainment',$LaLaLand_actors);

 $SilenceOfTheLamb_genre = new Genre('Thriller', 'Crime', 'Drama');
 $SilenceOfTheLamb_actors= new Actors('Jodie Foster', 'Anthony Hopkins', 'Scott Glenn');
 $movie_SilenceOfTheLamb= new Movie('The Silence of the Lambs',$SilenceOfTheLamb_genre,'1991','Jonathan Demme','Orion Pictures',$SilenceOfTheLamb_actors);

 $FindingNemo_genre = new Genre('Animation', 'Adventure', 'Comedy');
 $FindingNemo_actors= new Actors('Albert Brooks', 'Ellen DeGeneres', 'Alexander Gould');
 $movie_FindingNemo= new Movie('Finding Nemo',$FindingNemo_genre,'2003', 'Andrew Stanton', 'Walt Disney Pictures', $FindingNemo_actors);
 

 $MoviesArray=[
    $movie_Avenger,
    $movie_TheShawshankRedemption,
    $movie_TheLordOfTheRing,
    $movie_LaLaLand,
    $movie_SilenceOfTheLamb,
    $movie_FindingNemo,
 ];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Movies</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                <?php  foreach ($MoviesArray as $movie ) { ?>
                    <li  class="card my-2 ">
                        <div class="text-center">
                            <h4 >Title: <?php echo $movie->title ?></h4>
                        </div>
                        <div class="card-content ps-5">

                            <div class="mt-3">
                                <h6>Genre:</h6>
                                <ul>
                                    <?php foreach($movie->genre->genres as $genres) {?>
                                        <li>
                                            <?php echo $genres.';'?>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <h6>Director:</h6>
                                <ul>
                                    <li><?php echo $movie->director?></li>
                                </ul>
                                <h6>Publisher:</h6>
                                <ul>
                                    <li><?php echo $movie->publisher?></li>
                                    
                                </ul>
                            </div>
                            <div class="mt-3">
                                <h6>Main Actors:</h6>
                                <ul>
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