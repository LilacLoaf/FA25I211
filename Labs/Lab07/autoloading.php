<?php
/*
 * Author: Paxton Darcy
 * Autoloading class files with camelCase to underscore conversion
 */

spl_autoload_register("camelCaseToUnderscore");

//Function to display the camel case to underscore
function camelCaseToUnderscore($className) {
    $file = strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $className)) . ".class.php";
    include $file;
}

