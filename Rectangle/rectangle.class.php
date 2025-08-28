<?php
/**
 * Author: Jonathan Nguyen
 * Date: 8/28/2025
 * File: rectangle.class.php
 * Description:
 */
//Enter your PHP code here

class Rectangle {
private float $width, $height;



//set the rectangle's width
public function getWidth(): float {
    return $this->width;
}

//set the rectangle's height
public function getHeight(): float {
    return $this->height;
}

//generated code
    public function setWidth(float $width): Rectangle
    {
        $this->width = $width;
        return $this;
    }

    public function setHeight(float $height): Rectangle
    {
        $this->height = $height;
        return $this;
    }



//calculate area of the rectangle
public function calculateArea(): float {
    return $this->width * $this->height;
}

//calculate perimeter of the rectangle
public function calculatePerimeter(): float {
    return ($this->width + $this->height) * 2;
}


}