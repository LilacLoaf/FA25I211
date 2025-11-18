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

try {
    if ($operand1 == "") {
        throw new RequiredValueException("Fatal Error: Operand 1 is required");
    }
    if ($operand2 == "") {
        throw new RequiredValueException("Fatal Error: Operand 2 is required");
    }

    if (!is_numeric($operand1)) {
        throw new DataTypeException(gettype($operand1), "number", "Fatal Error: Operand 1 must be a number");
    }
    if (!is_numeric($operand2)) {
        throw new DataTypeException(gettype($operand2), "number", "Fatal Error: Operand 2 must be a number");
    }


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


            if ($operand2 == 0) {
//                throw new Exception("Fatal error: <br> dividing by zero is not permitted");
                throw new DivisionByZeroException();
            } else {
                $result = number_format($operand1 / $operand2, 2);
            }

    break;
default:
    $message = 'Invalid math operator';
}

}catch (DivisionbyZeroException $e){
$message = $e->getMessage();
} catch (RequiredValueException | DataTypeException | Exception $e){
$message = $e->getMessage();
}

//generate a JSON object for the result
$response = array("result" => $result, "message" => $message);
echo json_encode($response);

class DivisionbyZeroException extends Exception{
    public function GetDetails(): string{
        return "Fatal error: <br> dividing by zero <br> -from the getDetails method";
    }
}

class DataTypeException extends Exception{
        public function __construct($in_type, $in_expected)
        {
            parent::__construct("Data type error <br>"
                                . "Expected: " . $in_expected
                                . "<br>Recieved" . $in_type);
        }
}

class RequiredValueException extends Exception{
    //leave empty
}