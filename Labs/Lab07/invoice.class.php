<?php
/*
 * Author: Jonathan Nguyen
 * Date: 2025-10-23
 * Name: invoice.class.php
 * Description: Defines the Invoice class that implements Payable interface.
 */
require_once("payable.class.php");

//Creating the Invoice class implementing payable class
class Invoice implements Payable {
    //Initialing all the attributes
    private string $part_number;
    private string $part_description;
    private int $quantity;
    private float $price_per_item;

    //static count to count created invoices
    private static int $invoice_count = 0;

    //Constructor used to create all the necessary attributes
    public function __construct(string $part_number, string $part_description, int $quantity, float $price_per_item) {
        $this->part_number = $part_number;
        $this->part_description = $part_description;
        $this->quantity = $quantity;
        $this->price_per_item = $price_per_item;
        self::$invoice_count++;
    }

    //Get method
    public function getPartNumber(): string {
        return $this->part_number;
    }

    //Set method
    public function setPartNumber(string $part_number): void {
        $this->part_number = $part_number;
    }

    //Get method
    public function getPartDescription(): string {
        return $this->part_description;
    }

    //Set method
    public function setPartDescription(string $part_description): void {
        $this->part_description = $part_description;
    }

    //Get method
    public function getQuantity(): int {
        return $this->quantity;
    }

    //Set method
    public function setQuantity(int $quantity): void {
        $this->quantity = $quantity;
    }

    //Get method
    public function getPricePerItem(): float {
        return $this->price_per_item;
    }

    //Set method
    public function setPricePerItem(float $price): void {
        $this->price_per_item = $price;
    }

    //Get method
    public function getPaymentAmount(): float {
        return $this->quantity * $this->price_per_item;
    }

    //Display the created attributes in format
    public function __toString(): string {
        return "<h3>Invoice</h3>" .
            "<strong>Part Name:</strong> {$this->part_description}<br>" .
            "<strong>Quantity:</strong> {$this->quantity}<br>" .
            "<strong>Price:</strong> $" . number_format($this->price_per_item, 2) . "<br>" .
            "<strong>Payment:</strong> $" . number_format($this->getPaymentAmount(), 2) . "<br><hr>";
    }

    //Return the invoice count after initialization
    public static function getInvoiceCount(): int {
        return self::$invoice_count;
    }
}

