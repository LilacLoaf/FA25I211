<?php
/**
 * Author: Jonathan Nguyen
 * Date: 9/23/2025
 * File: guess.php
 * Description:
 */

if (isset($_COOKIE["random"])) {
    $random = $_COOKIE["random"];
} else {
    $random = rand(1, 100);
    setcookie("random", $random);
}

//retrieve the player's guess from the querystring variable
$guess = (int)$_GET["guess"];
//get the guess and convert it into an integer - called casting (?)

if ($guess > $random) {

    echo json_encode(["result" => 1]);

} else if ($guess < $random) {

    echo json_encode(["result" => -1]);

} else {

    echo json_encode(["result" => 0]);

}