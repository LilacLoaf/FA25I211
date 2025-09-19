<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/18/2025
 * File: search_movie.class.php
 * Description:
 */

require_once 'application/app_view.class.php';
require_once 'classes/search_movie.class.php';
require_once 'movie_manager.class.php';

class SearchMovie
{
    public function display($terms, $movies)
    {
        AppView::displayHeader("Search Results");

        // echo'<div id="main-header"> Movies in the Library</div>';
        //echo '<div class="grid-container">'

        //change the main header depending on what is input into the search bar, im not sure how to stop the url from changing if the search box is empty
        if ($movies === false) {
            $mainHeader = "Error retrieving movies";
        } elseif($terms == '') {
            $mainHeader = "Movies in the Library";
        }else{
                $mainHeader = "Search results for " . $terms . '<br>';
            }
        ?>

            <!-- set the main header as a variable to be used above (it doesnt work if its below?) -->
        <div id="main-header"> <?= $mainHeader ?></div>
        <div class="grid-container">

        <?php
//if else statements to control the output depending on what is sent through the search form
        if ($movies === false) {
            //have an error if there is an issue with the database, i dont know how to trigger an error from the test site so i dont know what we want in here
            echo "Error";
        } elseif ($movies === 0) {
            //if there are no movies found from the search, it will say no results found
            echo "No results found";
        } else {
            //if there are movies found, run a loop to get the movies based on the constructor and full them into the array
            foreach ($movies as $i => $movie) {
                $id = $movie->getId();
                $title = $movie->getTitle();
                $rating = $movie->getRating();
                $releaseDate = $release_date = new DateTime($movie->getReleaseDate());
                $image = $movie->getImage();
                //code copied from list movie class
                if (strpos($image, "http://") === false and strpos($image, "https://") === false) {
                    $image = MOVIE_IMG . $image;
                }
                if ($i % 6 == 0) {
                    echo "<div class='row'>";
                }
                echo "<div class='col'><p><a href='view_movie.php?id=" . $id . "'><img src='" . $image .
                        "'></a><span>$title<br>Rated $rating<br>" . $release_date->format('m-d-Y') . "</span></p></div>";

                if ($i % 6 == 5 || $i == count($movies) - 1) {
                    echo "</div>";
                }

            }
        }
        ?>
        </div>
        <?php
        //give us a back button and display the footer at the bottom of the page
        echo "<a href='list_movie.php'>Return to Movie List</a>";
        AppView::displayFooter();
    }
}
