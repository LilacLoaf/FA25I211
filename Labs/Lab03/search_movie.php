<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/18/2025
 * File: search_movie.php
 * Description:
 */

require_once 'classes/movie_manager.class.php';
require_once 'classes/search_movie.class.php';

//get the terms from the search input
$terms = isset($_GET['query-terms']) ? $_GET['query-terms'] : '';

//get the instance of the movie manager
$movie_manager = MovieManager:: getMovieManager();

//search through the movie manager using the terms variable
$movies = $movie_manager->search_movie($terms);

//if it fails for any reason throw an error
if ($movies === false) {
    $message = "error message";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

//display the search results
$view = new SearchMovie();
$view ->display($terms, $movies);
?>
