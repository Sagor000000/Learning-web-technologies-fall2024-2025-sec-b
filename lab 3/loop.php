<?php
// Pattern 1: 
// *
// * * 
// * * *
echo "Pattern 1:<br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";

// Pattern 2: 
// 1 2 3
// 12
// 1
echo "Pattern 2:<br>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
echo "<br>";

// Pattern 3: 
// A
// B C
// D E F
echo "Pattern 3:<br>";
$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }
    echo "<br>";
}
?>
