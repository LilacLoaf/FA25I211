<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/9/2025
 * File: list_movie.class.php
 * Description:
 */

require_once dirname(__FILE__,2) . "/application/app_view.class.php";

class ListMovie{
    //display all movies
    public function display($movies): void {
        AppView::displayHeader("List All Movies");
        ?>

        <div id="main-header"> Movies in the Library</div>
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
        <?php
        AppView::displayFooter();
    }
}