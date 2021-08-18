<?php
$number1 = '10';
$number2 = 10;
$number3 = 3;

if($number1 == $number2)
{
    echo "number1 and number2 are equal irrespective of which type.<br>";
}
if($number1 === $number2)
{
    echo "number1 and number2 are not equal with respect to type.<br>";
}
if($number1 <> $number3){
    echo "number1 and number3 are not equal";
}