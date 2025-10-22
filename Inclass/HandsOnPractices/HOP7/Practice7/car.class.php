<?php
/**
 * Author: Jonathan Nguyen
 * Date: 10/16/2025
 * File: car.class.php
 * Description:
 */

class Car extends Vehicle implements Nameable
{
    private string $name;
    public function __construct($name, $make)
    {
        parent::__construct($make);
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Car
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function horn(): string
    {
        return "Beep Beep";
    }

    public function toString(): void
    {
        echo "<b>Name:</b> " . $this->getName() . "<br>";
        echo "<b>Make:</b>" . $this->getMake() . "<br>";
        echo "<b>HornSound</b>:", $this->horn();
    }
}