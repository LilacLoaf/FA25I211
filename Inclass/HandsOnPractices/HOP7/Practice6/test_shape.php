<?php
	require('utilities.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta name="author" content="Admin" />

        <title>Abstract class example</title>
    </head>

    <body>
        <?php
        //create circles
        $c1 = new Circle(8);
        $c2 = new Circle(5);

        //create rectangles
        $r1 = new Rectangle(12, 8);
        $r2 = new Rectangle(20, 6);

        //create spheres
        $s1 = new Sphere(5);
        $s2 = new Sphere(8);

        //create cubes
        $cb1 = new Cube(5);
        $cb2 = new Cube(3);
        
        //create an array to store all the shapes
        $shapes = [$c1, $c2, $r1, $r2, $s1, $s2, $cb1, $cb2];

        /*This loop iterates the array and displays the string representation of each object.
         * This loop demonstrates polymorphism. Various types of shapes are stored in the array.
         * The correct version of the toString method gets called.
         */
        foreach ($shapes as $shape) {
            $shape->toString();
        }

        function printShape($shape):void{
            $shape->toString();
        }
        ?>
    </body>
</html>