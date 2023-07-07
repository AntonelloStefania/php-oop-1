 <?php
 
 class Movie{
    public $title;
    public $genre;
    public $year;
    public $classic;
    public $publisher;
    public $director;
    public $actors;
    
    
    public function setClassic(){
        if($this->year < 2010){
            $this->classic  = 'Classic Movie';
        } else{
            $this->classic  = 'Recent Movie';
        }
    }

    function __construct($title,  $genre, $year, $director, $publisher ,  $actors){
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
 $Avenger_genre=new Genre('Action','Adventure','Sci Fi');
 $TheShawshankRedemption_genre = new Genre('Drama', 'Crime');
 $TheLordOfTheRings_genre= new Genre('Adventure', 'Fantasy', 'Action');
 $LaLaLand_genre= new Genre('Romance','Drama','Musical');
 $SilenceOfTheLamb_genre = new Genre('Thriller', 'Crime', 'Drama');
 $FindingNemo_genre = new Genre('Animation', 'Adventure', 'Comedy');




 class Actors{
    public $actors;

    function __construct(...$actors){
        $this->actors = $actors;
    }
 }


 $Avenged_actors = new Actors('Robert Downey Jr', 'Chris Evans', 'Scarlett Johansson');
 $TheShawshankRedemption_actors = new Actors('Tim Robbins', 'Morgan Freeman', 'Bob Gunton');
 $TheLordOfTheRings_actors= new Actors('Elijah Wood', 'Ian McKellen', 'Viggo Mortensen');
 $LaLaLand_actors= new Actors( 'Ryan Gosling', 'Emma Stone', 'John Legend');
 $SilenceOfTheLamb_actors= new Actors('Jodie Foster', 'Anthony Hopkins', 'Scott Glenn');
 $FindingNemo_actors= new Actors('Albert Brooks', 'Ellen DeGeneres', 'Alexander Gould');





 ?>