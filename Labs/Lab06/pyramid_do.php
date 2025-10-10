<?php
/**
 * Author: Jonathan Nguyen
 * Date: 10/8/2025
 * File: pyramid_do.php
 * Description:
 */

//get the pyramid class
require_once "pyramid.class.php";
//recieve the width length and height
$width = $_GET["width"];
$length = $_GET["length"];
$height = $_GET["height"];
//create the new object
$pyramid = new pyramid($width, $length, $height);
//run the tostring function
$output = $pyramid->toString();

//send the json back
echo json_encode($output);