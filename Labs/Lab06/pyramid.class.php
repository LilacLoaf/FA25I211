<?php
/**
 * Author: Jonathan Nguyen
 * Date: 10/8/2025
 * File: pyramid.class.php
 * Description:
 */

//create class with rectangle class as the parent
class Pyramid extends Rectangle
{
    //add in the height
    private float $height;

    //constructor that gets the width and length from rectangle and also adds in the height
    public function __construct(float $width, float $length, float $height)
    {
        parent::__construct($width, $length);
        $this->height = $height;

    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getBaseArea(): float
    {
        return $this->getArea();
    }

    public function getVolume(): float
    {
        return $this->getBaseArea() * $this->height / 3;
    }

    public function getLateralSurface(): float
    {
        return sqrt(pow($this->getWidth() / 2, 2) + pow($this->getHeight(), 2))
            + sqrt(pow($this->getLength() / 2, 2) + pow($this->getHeight(), 2));
    }

    public function getSurfaceArea(): float
    {
        return $this->getLateralSurface() + $this->getBaseArea();
    }

    public function toString(): null
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