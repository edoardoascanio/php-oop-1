<?php 

include "movie.php";

$film1 = new Movie("Terminator", "The Terminator", "English", "4");
$film2 = new Movie("Rocky", "Rocky", "English", "4" );

var_dump($film1);
var_dump($film2);