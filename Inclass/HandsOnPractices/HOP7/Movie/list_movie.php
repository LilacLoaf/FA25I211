<?php

/*
 * Author: Louie Zhu
 * Date: 03/13/2024
 * File: list_movie.php
 * Description: list all movies
 * 
 */
require_once dirname(__FILE__) . '/classes/movie_manager.class.php';
require_once dirname(__FILE__) . '/classes/list_movie.class.php';

$movie_manager = MovieManager::getMovieManager(); //create a MovieManager

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