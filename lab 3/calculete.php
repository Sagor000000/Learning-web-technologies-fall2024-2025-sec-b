<?php
function calculateArea($length, $width) {
    return $length * $width;
}

function calculatePerimeter($length, $width) {
    return 2 * ($length + $width);
}

$length = 10; 
$width = 5;  

$area = calculateArea($length, $width);
$perimeter = calculatePerimeter($length, $width);

echo "Length: $length <br>";
echo "Width: $width <br>";
echo "Area of the rectangle: $area <br>";
echo "Perimeter of the rectangle: $perimeter <br>";
?>
