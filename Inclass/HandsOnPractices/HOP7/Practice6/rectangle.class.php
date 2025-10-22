<?php

/*
 * Author Louie Zhu
 * Date: 03/16/2024
 * Name: rectangle.class.php
 * Description: this class models a rectangle. It extends the TwoDimentionalshape class. 
 */

class Rectangle extends TwoDimensionalShape {
    // declare private attributes
    private float $width, $height;
    
     //constructor
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    //method to return the name
    public function getName(): string
    {
        return "Rectangle";
    }
    
    //method to return the area
    public function getArea(): float|int
    {
         return $this->width * $this->height;
    }
    
    //method to return the perimeter
    public function getPerimeter(): float|int
    {
        return ($this->width + $this->height) * 2;
    }
} //end of the Rectangle class