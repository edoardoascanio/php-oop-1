<?php 

include "movie.php";

$film1 = new Movie("Terminator", "The Terminator", "English", "");
$film2 = new Movie("Rocky", "Rocky", "English", "" );

var_dump($film1);
var_dump($film2);

$film1->getRandomVote(5);
$film2->getRandomVote(5);
