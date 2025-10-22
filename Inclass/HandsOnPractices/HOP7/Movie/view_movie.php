<?php

/*
 * Author: Louie Zhu
 * Date: 03/13/2024
 * File: view_movie.php
 * Description: view details of the selected movie
 * 
 */
//get movie id from a query string variable
if (!isset($_GET['id']) || !is_int(intval($_GET['id']))) {
    //handle errors
    $message = "Movie id is invalid.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}
$id = intval($_GET['id']);

//view movie details
require_once dirname(__FILE__) . '/classes/movie_manager.class.php';
require_once dirname(__FILE__) . '/classes/view_movie.class.php';


//get the movie object
$movie_manager = MovieManager::getMovieManager();
$movie = $movie_manager->view_movie($id);

//handle errors
if (!$movie) {
    //handle errors
    $message = "There was a problem displaying the movie.";
    header("Location: show_error.php?eMsg=$message");
}

//display all movies
$view = new ViewMovie();
$view->display($movie);