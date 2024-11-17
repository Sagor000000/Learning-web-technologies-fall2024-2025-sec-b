<?php
function checkOddOrEven($number) {
    if ($number % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}

$number = 7; 
$result = checkOddOrEven($number);
echo "The number $number is $result.<br>";
?>
