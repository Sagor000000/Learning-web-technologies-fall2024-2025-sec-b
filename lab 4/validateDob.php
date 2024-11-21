<?php

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

function isValidDate($day, $month, $year) {
    if (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
        return false;
    }

    $day = (int)$day;
    $month = (int)$month;
    $year = (int)$year;

    if ($day < 1 || $day > 31) {
        return false; 
    }
    if ($month < 1 || $month > 12) {
        return false; 
    }
    if ($year < 1900 || $year > 2024) {
        return false;
    }

    
    return checkdate($month, $day, $year); 
}

if (empty($day) || empty($month) || empty($year)) {
    echo "Invalid date: All fields are required.";
} elseif (!isValidDate($day, $month, $year)) {
    echo "Invalid date: Please enter a valid date (dd: 1-31, mm: 1-12, yyyy: 1953-1998).";
} else {
    echo "Valid date of birth!";
}
?>