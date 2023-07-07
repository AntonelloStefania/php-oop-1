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
 var_dump($movie_Avenger);

 $TheShawshankRedemption_genre = new Genre('Drama', 'Crime');
 $TheShawshankRedemption_actors = new Actors('Tim Robbins', 'Morgan Freeman', 'Bob Gunton');
 $movie_TheShawshankRedemption = new Movie('The Shawshank Redemption', $TheShawshankRedemption_genre, '1994', 'Frank Darabont', 'Castle Rock Entertainment', $TheShawshankRedemption_actors );
 var_dump($movie_TheShawshankRedemption);

 $TheLordOfTheRings_genre= new Genre('Adventure', 'Fantasy', 'Action');
 $TheLordOfTheRings_actors= new Actors('Elijah Wood', 'Ian McKellen', 'Viggo Mortensen');
 $movie_TheLordOfTheRing=new Movie('The Lord of the Rings: The Fellowship of the Ring',$TheLordOfTheRings_genre,'2001','Peter Jackson','New Line Cinema', $TheLordOfTheRings_actors);
 var_dump($movie_TheLordOfTheRing);

 $LaLaLand_genre= new Genre('Romance','Drama','Musical');
 $LaLaLand_actors= new Actors( 'Ryan Gosling', 'Emma Stone', 'John Legend');
 $movie_LaLaLand= new Movie('La La Land', $LaLaLand_genre, '2016','Damien Chazelle','Summit Entertainment',$LaLaLand_actors);
 var_dump($movie_LaLaLand);

 $SilenceOfTheLamb_genre = new Genre('Thriller', 'Crime', 'Drama');
 $SilenceOfTheLamb_actors= new Actors('Jodie Foster', 'Anthony Hopkins', 'Scott Glenn');
 $movie_SilenceOfTheLamb= new Movie('The Silence of the Lambs',$SilenceOfTheLamb_genre,'1991','Jonathan Demme','Orion Pictures',$SilenceOfTheLamb_actors);
 var_dump($movie_SilenceOfTheLamb);

 $FindingNemo_genre = new Genre('Animation', 'Adventure', 'Comedy');
 $FindingNemo_actors= new Actors('Albert Brooks', 'Ellen DeGeneres', 'Alexander Gould');
 $movie_FindingNemo= new Movie('Finding Nemo',$FindingNemo_genre,'2003', 'Andrew Stanton', 'Walt Disney Pictures', $FindingNemo_actors);
 var_dump($movie_FindingNemo);


?>