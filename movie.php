<?php 

class Movie {
    public $title;
    public $original_title;
    public $language;
    public $vote_average;

    function __construct($title, $original_title, $language, $vote_average) {
        $this->title = $title;
        $this->original_title = $original_title;
        $this->language = $language;
        $this->vote_average = $vote_average;
        
    }
}