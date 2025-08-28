<?php
/**
 * Author: Jonathan Nguyen
 * Date: 8/28/2025
 * File: rectangle.php
 * Description:
 */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test the rectangle class</title>
</head>
<body>
<?php
//Enter your PHP code here
require_once("rectangle.class.php");

$r1 = new Rectangle();
$r2 = new Rectangle();

$r1 -> setWidth(width:20)->setHeight(height:30);
$area1 = $r1->calculateArea();
$perimeter1 = $r1->calculatePerimeter();

echo "Rectangle 1: Area = $area1. Perimeter = $perimeter1 <br>";


$r2 -> setWidth(width:40)->setHeight(height:60);
$area2 = $r2->calculateArea();
$perimeter2 = $r2->calculatePerimeter();

echo "Rectangle 2: Area = $area2. Perimeter = $perimeter2 <br>";
?>
</body>
</html>