<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['gender'])) {
        $gender = htmlspecialchars($_POST['gender']);
        echo "You have selected: " . $gender;
    } else {
        echo "Error: Please select a gender.";
    }
}
?>