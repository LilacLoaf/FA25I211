<?php

/*
 * Author: Louie Zhu
 * Date: 03/09/2024
 * File: movie_controller.class.php
 * Description: the movie controller
 *
 */

class MovieController {

    private MovieModel $movie_model;

    //default constructor
    public function __construct() {
        //create an instance of the MovieModel class
        $this->movie_model = MovieModel::getMovieModel();
    }

    //index action that displays all movies
    public function index(): void {
        $movies = $this->movie_model->list_movie();

        if(!$movies){
            $this->error("There was a problem retrieving the movies.");
            return;

            $view = new MovieDetail();
            $view->display($movies);
        }
    }

    //show details of a movie
    public function detail($id): void {
        $movie = $this->movie_model->view_movie($id);

        if(!$movie){
            $this->error("There was a problem retrieving the movies.");
            return;
        }
    }

    //handle an error
    public function error($message): void {
        $view = new MovieError();
        $view->display($message);
    }
	
    //search movies
    public function search(): void {
        //retrieve query terms from search form
        $query_terms = trim($_GET['query-terms']);

        //if search term is empty, list all movies
        if ($query_terms == "") {
            $this->index();
        }

        //search the database for matching movies
        $movies = $this->movie_model->search_movie($query_terms);

        if ($movies === false) {
            //handle error
            $this->error("An error has occurred.");
            return;
        }
        //display matched movies
        $search = new MovieSearch();
        $search->display($query_terms, $movies);
    }

    //autosuggestion
    public function suggest($terms): void {
        //retrieve query terms
        $query_terms = urldecode(trim($terms));
        $movies = $this->movie_model->search_movie($query_terms);

        //retrieve all movie titles and store them in an array
        $titles = array();
        if ($movies) {
            foreach ($movies as $movie) {
                $titles[] = $movie->getTitle();
            }
        }

        echo json_encode($titles);
    }


    //handle calling inaccessible methods
    public function __call($name, $arguments) {
        // Note: value of $name is case sensitive.
        $this->error("Calling method '$name' caused errors. Route does not exist.");
        return;
    }

}
