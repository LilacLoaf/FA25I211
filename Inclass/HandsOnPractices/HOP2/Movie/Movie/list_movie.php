<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/9/2025
 * File: list_movie.php
 * Description:
 */

require_once dirname(__FILE__) . "/classes/list_movie.class.php";
require_once dirname(__FILE__) . "/classes/movie_manager.class.php";

//create a movie manager
$movie_manager = MovieManager::getMovieManager();

//get all movies
$movies = $movie_manager->list_movie();

//handle errors
if(!$movies){
    $message = "There was an error retrieving the movies";
    header("location:show_error.php?eMsg=$message");
    exit;
}

//display the movies
$view = new ListMovie();
$view->display($movies);