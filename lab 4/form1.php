<?php
// Retrieve the username from the form
$username = trim($_POST["username"]);

// Function to check if the first character is not a number
function checkNumber($username) {
    // Check if the first character is a digit
    return !ctype_digit($username[0]);
}

// Function to check if the username contains valid characters only
function checkUsername($username) {
    // Define valid characters
    $validChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-_';

    // Validate each character in the username
    for ($i = 0; $i < strlen($username); $i++) {
        if (strpos($validChars, $username[$i]) === false) {
            return false;
        }
    }
    return true;
}

// Perform validations
if (strlen($username) < 2) {
    echo "Invalid username: Must contain at least 2 characters.";
} elseif (!checkNumber($username)) {
    echo "Invalid username: Cannot start with a number.";
} elseif (!checkUsername($username)) {
    echo "Invalid username: Contains invalid characters.";
} else {
    echo "Valid username!";
}
?>