<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/11/2025
 * File: view_movie.php
 * Description:
 */

//retrieve movie id from a query string variable
if(!isset($_GET['id']) || !is_int(intval($_GET['id']))) {
 $message = "Novie id is not valid";
 header("Location: show_error.php?eMsg=$message");
 exit;
}

$id = (int)$_GET['id'];

require_once dirname(__FILE__) . "/classes/view_movie.class.php";
require_once dirname(__FILE__) . "/classes/movie_manager.class.php";

//get movie details
$movie_manager = MovieManager::GetMovieManager();
$movie=$movie_manager->view_movie($id);

//error handling
if(!$movie) {
    $message = "There was an error retrieving the movie";
    header("Location: show_error.php?eMsg=$message");
    exit;
}

//display the movie
$view = new ViewMovie();
$view->display($movie);