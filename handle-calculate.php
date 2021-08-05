<?php
// exctract values
extract($_POST);
// check if the inputs numeric or no
function checknumric(int|float $num1, int|float $num2): bool
{
    if (is_numeric($num1) and is_numeric($num2)) {
        return true;
    }
    return false;
}
// calculate
function calc(int|float $num1, int|float $num2, string $operation): int|float
{
    $result = 0;
    if (checknumric($num1, $num2)) {
        
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'sub':
                $result = $num1 - $num2;
                break;
            case 'mul':
                $result = $num1 * $num2;
                break;
            case 'div':
                $result = $num1 / $num2;
                break;
        }
    }
    return $result;
}
// handle and redirect
function handle(int|float $num1, int|float $num2, string $operation):void{
    $result="pls choose one of the basic mathmatical operations";
    if(calc($num1,$num2,$operation)!=0){
        $result=calc($num1,$num2,$operation);
    }
    header("location: calculate.php?result=$result");
}

handle($num1,$num2,$operation);