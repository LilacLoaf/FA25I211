<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/18/2025
 * File: search_movie.php
 * Description:
 */

require_once 'classes/movie_manager.class.php';
require_once 'classes/search_movie.class.php';

$terms = isset($_GET['term']) ? $_GET['term'] : '';

$movie_manager = MovieManager:: getMovieManager();
$movies = $movie_manager->search_movie($terms);
$search = new SearchMovie();

if (!$movies) {
    //handle errors
    $message = "error message";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

$view = new SearchMovie();
$view ->display($movies);