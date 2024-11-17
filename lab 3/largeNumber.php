<?php

$num1 = 25;
$num2 = 42; 
$num3 = 17;

function findLargest($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
    } else {
        return $num3;
    }
}

$largest = findLargest($num1, $num2, $num3);

echo "The numbers are: $num1, $num2, $num3 <br>";
echo "The largest number is: $largest <br>";
?>
