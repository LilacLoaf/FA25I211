<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/18/2025
 * File: search_movie.php
 * Description:
 */

require_once 'classes/movie_manager.class.php';
require_once 'classes/search.class.php';

$movie_manager = MovieManager:: getMovieManager(); //create a MovieManager

//retrieve movies
$movies = $movie_manager->list_movie();

//handle errors if the last query failed
if (!$movies) {
    //handle errors
    $message = "There was a problem displaying movies.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

// display all movies
$view = new ListMovie();
$view->display($movies);