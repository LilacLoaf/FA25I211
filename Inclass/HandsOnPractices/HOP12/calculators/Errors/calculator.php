<?php

/**
 * Author Louie Zhu
 * Date: 03/10/2024
 * Description: this calculator application handles the division by zero exception with the Exception class
 */
//variables for operands, operator, result, and error message
$operand1 = $operand2 = $operator = $result = $message = '';

//retrieve operands and operator
if (isset($_GET['operand1']) && isset($_GET['operand2']) && isset($_GET['operator'])) {
    $operand1 = $_GET['operand1'];
    $operand2 = $_GET['operand2'];
    $operator = $_GET['operator'];
}

//do the operations
switch ($operator) {
    case '+':
        $result = $operand1 + $operand2;
        break;
    case '-':
        $result = $operand1 - $operand2;
        break;
    case '*':
        $result = $operand1 * $operand2;
        break;
    case '/':
        $result = number_format($operand1 / $operand2, 2);
        break;
    default:
        $message = 'Invalid math operator';
}

//generate a JSON object for the result
$response = array("result" => $result, "message" => $message);
echo json_encode($response);