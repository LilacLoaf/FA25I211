<?php
/**
 * Author: Jonathan Nguyen
 * Date: 10/14/2025
 * File: sphere.class.php
 * Description:
 */

class Sphere extends ThreeDimensionalShape
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }
public function getName(): string{
        return "Sphere";
}
public function getArea(): float{
        return 4*pow($this->radius,2)*M_PI;
}
public function getVolume(): float{
        return 4/3 * pow($this->radius,3)*M_PI;
}
}