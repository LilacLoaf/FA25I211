<?php

/**
 * Author: Louie Zhu
 * Date: 03/16/2024
 * Name: dog.class.php
 * Description: the Dog class models a dog. It extends Mammal class and implements the Nameable interface.
 */

class Dog extends Mammal implements Nameable {
    private string $name;
    
    //constructor
    public function __construct($name, $type) {
        parent::__construct($type);
        $this->name = $name;
    }
    
    //get the name of a dog
    public function getName(): string {
        return $this->name;
    }
    
    //set the name of a dog
    public function setName($name): Dog {
        $this->name = $name;
        return $this;
    }
    
    //the makeNoise method
    public function makeNoise(): string {
        return "Arf! Arf!";
    }
    public function toString(): void {
        echo "<b>Name</b>: ", $this->getName();
        echo "<br /><b>Type</b>: ", parent::getType();
        echo "<br /><b>Noise</b> ", $this->makeNoise();
    }
}