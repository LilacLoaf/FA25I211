<?php
/**
 * Author: Jonathan Nguyen
 * Date: 10/8/2025
 * File: rectangle.class.php
 * Description:
 */

//create the rectangle class
class Rectangle {
//define the width and length
    private float $width;
    private float $length;
//define the constructor
    public function __construct(float $width, float $length) {
        $this->width = $width;
        $this->length = $length;

    }
//make a width getter
    public function getWidth(): float {
        return $this->width;
    }
    //make a length getter
    public function getLength(): float {
        return $this->length;
    }
    //make an area getter using width times length
    public function getArea(): float {
        return $this->width * $this->length;
    }
    //make a perimeter getter using width + length
    public function getPerimeter(): float {
        return 2*($this->width + $this->length);
    }

}