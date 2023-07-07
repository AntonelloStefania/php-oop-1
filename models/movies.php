<?php 
 //Avengers
 $movie_Avenger= new Movie('The Avengers', $Avenger_genre,'2012','Joss Whedon', 'Marvel Studios',$Avenged_actors);
 $movie_Avenger->setClassic();

//The Shawshank Redemption
 $movie_TheShawshankRedemption = new Movie('The Shawshank Redemption', $TheShawshankRedemption_genre, '1994',  'Frank Darabont', 'Castle Rock Entertainment', $TheShawshankRedemption_actors );
 $movie_TheShawshankRedemption->setClassic();

 //The Lord Of The Ring: The Fellowship of the Ring
 $movie_TheLordOfTheRing=new Movie('The Lord of the Rings: The Fellowship of the Ring',$TheLordOfTheRings_genre,'2001','Peter Jackson','New Line Cinema', $TheLordOfTheRings_actors);
  $movie_TheLordOfTheRing->setClassic();

// La La Land
 $movie_LaLaLand= new Movie('La La Land', $LaLaLand_genre, '2016','Damien Chazelle','Summit Entertainment',$LaLaLand_actors);
 $movie_LaLaLand->setClassic();

//Silence Of The Lamb
 $movie_SilenceOfTheLamb= new Movie('The Silence of the Lambs',$SilenceOfTheLamb_genre,'1991','Jonathan Demme','Orion Pictures',$SilenceOfTheLamb_actors);
 $movie_SilenceOfTheLamb->setClassic();

//Finding Nemo
 $movie_FindingNemo= new Movie('Finding Nemo',$FindingNemo_genre,'2003', 'Andrew Stanton', 'Walt Disney Pictures', $FindingNemo_actors);
 $movie_FindingNemo->setClassic();



//array di tutti i film
 $MoviesArray=[
    $movie_Avenger,
    $movie_TheShawshankRedemption,
    $movie_TheLordOfTheRing,
    $movie_LaLaLand,
    $movie_SilenceOfTheLamb,
    $movie_FindingNemo,
 ];



?>