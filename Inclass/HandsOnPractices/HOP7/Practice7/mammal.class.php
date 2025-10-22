<?php

/**
 * Author: Louie Zhu
 * Date: 03/16/2024
 * Name: mammal.class.php
 * Description: An abstract class to models a mammal.
 */
abstract class Mammal
{

    //private attribute
    private string $type;

    //constructor
    public function __construct($type)
    {
        $this->type = $type;
    }

    //get the type of mammal
    public function getType(): string
    {
        return $this->type;
    }

    //set the type of mammal
    public function setType($type): Mammal
    {
        $this->type = $type;
        return $this;
    }

    //an abstract method
    abstract public function makeNoise();
}