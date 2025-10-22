<?php

/**
 * Author: Jonathan Nguyen
 * Date: 10/16/2025
 * File: vehicle.class.php
 * Description:
 */
abstract class Vehicle
{
    private string $make;
    public function __construct(string $make){
        $this->make = $make;
    }
    public function getMake():string{
        return $this->make;
    }
    public function setMake(string $make){
        $this->make = $make;
    }
    abstract public function horn();
}