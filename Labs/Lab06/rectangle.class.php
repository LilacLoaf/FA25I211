<?php
/**
 * Author: Jonathan Nguyen
 * Date: 10/8/2025
 * File: rectangle.class.php
 * Description:
 */

class Rectangle {

    private float $width;
    private float $length;

    public function __construct(float $width, float $length) {
        $this->width = $width;
        $this->length = $length;

    }

    public function getWidth(): float {
        return $this->width;
    }
    public function getLength(): float {
        return $this->length;
    }
    public function getArea(): float {
        return $this->width * $this->length;
    }
    public function getPerimeter(): float {
        return 2*($this->width + $this->length);
    }

}