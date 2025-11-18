<?php
/* Author: Louie Zhu
 * Date: 03/10/2024
 * Name: index.php 
 * Description: This project demonstrates exception handling in PHP. This web page creates the interface of the calculator.
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Exception Handling in PHP</title>
        <script type="text/javascript" src="calculator.js"></script>
        <style>
            table {
                margin: 0 auto;
                border: 10px outset gray;
                padding: 1px;
                width: 320px;
            }

            td {
                border: 1px solid gray;
                padding: 10px;
            }

            tr td:first-child {
                text-align: right;
                width: 50%;
            }
        </style>
    </head>

    <body style="margin: 10px 0 0 20px;">
        <h1 style="text-align: center">Exception Handling in PHP</h1>

        <table>
            <tr>
                <td>Enter a number:</td>
                <td><input id="operand1" type="text" size="10" /></td>
            </tr>
            <tr>
                <td>Enter a number:</td>
                <td><input id="operand2" type="text" size="10" /></td>
            </tr>
            <tr>
                <td >Result:</td>
                <td><div id="result" style="border-width: 0; background-color:#E9E9E9"></div></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                    <input name="addition" type="button" value="  +  " onclick="dothemath(this.value)" />
                    <input name="subtraction" type="button" value="  -  " onclick="dothemath(this.value)" />
                    <input name="multiplication" type="button" value="  x  " onclick="dothemath('*')" />
                    <input name="division" type="button" value="  /  " onclick="dothemath(this.value)" />
                </td>
            </tr>
            <tr>
                <td colspan="2"><div id="message" style="text-align: left; height: 90px; color: red"></div></td>
            </tr>
        </table>

    </body>
</html>