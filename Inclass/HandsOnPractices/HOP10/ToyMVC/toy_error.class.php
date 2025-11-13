<?php

class ToyError
{
    public function display($message): void
    {
        ?>

        <!DOCTYPE HTML>
        <html lang="en">
        <head>
            <title>ToyMVC Error</title>
            <link type="text/css" rel="stylesheet" href="includes/style.css"/>
        </head>
        <body>
        <table style="width: 500px">
            <tr>
                <td style="vertical-align: center; text-align: center">
                    <img src='includes/kaboom.png' border='0'/>
                </td>
                <td style="vertical-align: top; text-align: left">
                    <h3> We're sorry, but an error has occurred.</h3>
                    <?php echo $message; ?>
                    <p><a href="index.php">HOME</a></p>
                </td>
            </tr>
        </table>
        </body>
        </html>

        <?php
    } // end of ToyError display method
} // end of ToyError class

?>