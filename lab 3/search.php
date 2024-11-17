<?php
function searchElement($array, $element) {
    foreach ($array as $value) {
        if ($value == $element) {
            return true;
        }
    }
    return false; //
}

$array = [10, 20, 30, 40, 50]; 
$elementToSearch = 30; 

$isFound = searchElement($array, $elementToSearch);

if ($isFound) {
    echo "The element $elementToSearch was found in the array.<br>";
} else {
    echo "The element $elementToSearch was not found in the array.<br>";
}
?>
