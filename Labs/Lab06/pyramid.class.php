<?php

use HOP7\HandsOnPractices\Practice6\Rectangle;

/**
 * Author: Jonathan Nguyen
 * Date: 10/8/2025
 * File: pyramid.class.php
 * Description:
 */

require_once "rectangle.class.php";

//create class with rectangle class as the parent
class Pyramid extends Rectangle
{
    //add in the height
    private float $height;

    //constructor that gets the width and length from rectangle and also adds in the height
    public function __construct(float $width, float $length, float $height)
    {
        //get the width and length from the parent rectangle constructor
        parent::__construct($width, $length);
        $this->height = $height;

    }
//create a height getter
    public function getHeight(): float
    {
        return $this->height;
    }
//get the base area using the area function from the rectangle class
    public function getBaseArea(): float
    {
        return $this->getArea();
    }
//create a volume getter using the area and height /3
    public function getVolume(): float
    {
        return $this->getBaseArea() * $this->height / 3;
    }
//get the lateral surface using the width and height and following the formula in the instructions
    public function getLateralSurface(): float
    {
        return sqrt(pow($this->getWidth() / 2, 2) + pow($this->getHeight(), 2))
            + sqrt(pow($this->getLength() / 2, 2) + pow($this->getHeight(), 2));
    }
//get the surface area using the lateral surface and the base area
    public function getSurfaceArea(): float
    {
        return $this->getLateralSurface() + $this->getBaseArea();
    }
//define the tostring to create the json data, php storm recommended the array data type
    public function toString(): array
    {
        return [
            "Width" => number_format($this->getWidth()),
            "Height" => number_format($this->getHeight()),
            "Base" => number_format($this->getBaseArea()),
            "Volume" => number_format($this->getVolume()),
            "Lateral" => number_format($this->getLateralSurface()),
            "Surface" => number_format($this->getSurfaceArea()),
        ];


    }

}
