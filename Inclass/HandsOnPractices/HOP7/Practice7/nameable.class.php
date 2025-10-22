<?php

/**
 * Author: Louie Zhu
 * Date: 03/16/2024
 * Name: nameable.class.php
 * Description: An interface for all nameable objects.
 */


interface Nameable  {
    //abstract methods
    public function getName();
    public function setName($name);
}