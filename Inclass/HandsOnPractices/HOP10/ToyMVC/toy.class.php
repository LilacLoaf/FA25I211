<?php
/**
 * Author: Jonathan Nguyen
 * Date: 11/4/2025
 * File: toy.class.php
 * Description:
 */

class Toy{
    //define the properties of the toy - columns from db
    private ?int $id = null;
    private string $name, $description;
    private float $price;

    //initialize the properties
    public function __construct($id, $name, $desc, $price){
        $this->id = $id;
        $this->name = $name;
        $this->description = $desc;
        $this->price = $price;
    }
public function getId(): ?int
{
    return $this->id;
}
public function getName(): string
{
    return $this->name;
}
public function getDescription(): string
{
    return $this->description;
}
public function getPrice(): float
{
    return $this->price;
}




}