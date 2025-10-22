<?php
/**
 * Author: Jonathan Nguyen
 * Date: 10/14/2025
 * File: three_dimensional_shape.class.php
 * Description:
 */

abstract class ThreeDimensionalShape extends Shape{
    abstract public function getArea();
    abstract public function getVolume();

    public function toString():void{
        echo "<h2>", $this->getName(), "</h2>";
        printf ("Area: %.2f", $this->getArea());
        printf ("<br>Volume: %.2f", $this->getVolume());
    }
}