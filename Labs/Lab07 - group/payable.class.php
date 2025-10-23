<?php
/*
 * Author: Nicholas Weatherspoon
 * Date: 10/22/2025
 * File: payable.class.php
 * Description: File contains the main payable interface used in the program
 */
//Create the Payable interface
interface Payable {
    //Method used to get all of the payment information.
    public function getPaymentAmount(): float;
}
?>

