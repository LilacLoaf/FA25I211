<?php

/**
 * Author Louie Zhu
 * Date: 03/16/2024
 * Name: two_dimentional_shape.class.php
 * Description: this class models a two dimensional shape. It extends the Shape. 
 * It is the parent class of Circle and Rectangle classes.
 */

abstract class TwoDimensionalShape extends Shape {
    //No attributes
    //No constructors
    
    //Abstract method to calculate and return the area
    abstract protected function getArea();
    
    //Abstract method to calculate and return the perimeter
    abstract protected function getPerimeter();
    
    //method to print information
    public function toString(): void
    {
        echo "<h2>", $this->getName(), "</h2>";
        printf("Area: %0.2f", $this->getArea());
        printf("<br>Perimeter: %.2f", $this->getPerimeter());
    }
}
?>