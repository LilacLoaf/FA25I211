<?php

class ToyView
{
    public function display($toys): void
    {


        ?>


        <!DOCTYPE HTML>
        <html lang="en">
        <head>
            <title>ToyMVC List All Toys</title>
            <link type="text/css" rel="stylesheet" href="includes/style.css"/>
        </head>
        <body>
        <h2>Toys in our inventory</h2>
        <table style="border: none">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            <?php
            //add code here to create a new row for each toy
            foreach ($toys as $toy) {
                echo "<tr>";
                echo "<td>", $toy->getID(), "</td>";
                echo "<td>", $toy->getName(), "</td>";
                echo "<td>", $toy->getDescription(), "</td>";
                echo "<td>$", $toy->getPrice(), "</td>";
            }


            ?>
        </table>
        </body>
        </html>

        <?php
    } //end of ToyView display method
} // end of Toy View Class
?>