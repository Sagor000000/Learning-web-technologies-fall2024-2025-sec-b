<?php
// Retrieve the email input from the form
$email = $_POST["email"];

// Function to manually validate the email format
function isValidEmail($email) {
    // Check if the email contains exactly one "@" symbol
    $atSymbolPos = strpos($email, '@');
    if ($atSymbolPos === false) {
        return false; // Missing "@" symbol
    }

    // Split the email into local part and domain part
    $localPart = substr($email, 0, $atSymbolPos);
    $domainPart = substr($email, $atSymbolPos + 1);

    // Check if both local and domain parts exist
    if (empty($localPart) || empty($domainPart)) {
        return false;
    }

    // Check if the domain part contains at least one "."
    $dotPos = strpos($domainPart, '.');
    if ($dotPos === false || $dotPos === strlen($domainPart) - 1) {
        return false; // No "." in domain or "." at the end
    }

    // Check for valid characters (letters, numbers, ., _, -) in the local part
    if (!preg_match('/^[a-zA-Z0-9._-]+$/', $localPart)) {
        return false;
    }

    // Check for valid characters (letters, numbers, ., -) in the domain part
    if (!preg_match('/^[a-zA-Z0-9.-]+$/', $domainPart)) {
        return false;
    }

    return true;
}

// Perform validations
if (empty($email)) {
    // Check if the email field is empty
    echo "Invalid email: Field cannot be empty.";
} elseif (!isValidEmail($email)) {
    // Check if the email is not in a valid format
    echo "Invalid email: Must be a valid email address (e.g., anything@example.com).";
} else {
    // If all validations pass
    echo "Valid email!";
}
?>