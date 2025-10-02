<?php
/*
 * Author: Louie Zhu
 * Date: 03/13/2024
 * File: search_movie.class
 * Description: this script defines the SearchMovie class. The class contains a method named display, which
 *     accepts an array of Movie objects and displays them in a grid.
 * 
 */
require_once dirname(__FILE__, 2) . '/application/app_view.class.php';

class SearchMovie {

    public function display($terms, $movies): void
    {
        AppView::displayHeader("Search Results");
        ?>

        <div id="main-header"> Search Results for <i><?= $terms ?></i></div>
        <hr>
        <!-- display all records in a grid -->
        <div class="grid-container">
            <?php
            if ($movies === 0) {
                echo "No movie was found.<br><br><br><br><br>";
            } else {
                //display movies in a grid; six movies per row
                foreach ($movies as $movie) {
                    $id = $movie->getId();
                    $title = $movie->getTitle();
                    $rating = $movie->getRating();
                    $release_date = new DateTime($movie->getReleaseDate());
                    $image = $movie->getImage();
                    if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
                        $image = MOVIE_IMG . $image;
                    }

                    echo "<div class='item'><p><a href='view_movie.php?id=" . $id . "'><img src='" . $image .
                        "'></a><span>$title<br>Rated $rating<br>" . $release_date->format('m-d-Y') . "</span></p></div>";

                }
            }
            ?>  
        </div>
        <a href="list_movie.php">Go to movie list</a>
        <?php
        AppView::displayFooter();
    }

}
