<?php
/**
 * Author Louie Zhu
 * Date: 03/16/2024
 * Name: circle.class.php
 * Description: this class models a circle. It extends the TwoDimentionalshape class. 
 */
class Circle extends TwoDimensionalShape {
    // declare private attribute
    private float $radius;
    const PI = 3.14;
    
    //constructor
    public function __construct($r) {
        $this->radius = $r;
    }
    
    //method to return the name
    public function getName(): string
    {
        return "Circle";
    }
    
    //method to return the area
    public function getArea(): float|int
    {
         return pow($this->radius, 2)* self::PI;
    }
    
    //method to return the perimeter
    public function getPerimeter(): float|int
    {
        return $this->radius * 2 * self::PI;
    }
} //end of Circle class