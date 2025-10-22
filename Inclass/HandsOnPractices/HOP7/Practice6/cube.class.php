<?php
/**
 * Author: Jonathan Nguyen
 * Date: 10/14/2025
 * File: cube.class.php
 * Description:
 */

class Cube extends ThreeDimensionalShape{
    private float $side;
    public function __construct(float $side){
        $this->side = $side;
    }
    public function getName(): string{
        return "Cube";
    }
    public function getArea(): float{
        return 6*pow($this->side,2);
    }
    public function getVolume(): float{
        return pow($this->side,3);
    }
}