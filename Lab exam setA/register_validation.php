<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Enable error reporting for debugging
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Collect and sanitize input
    $id = trim($_POST['id']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $name = trim($_POST['name']);
    $user_type = isset($_POST['user_type']) ? trim($_POST['user_type']) : '';

    // Validation
    if (empty($id) || empty($password) || empty($confirm_password) || empty($name) || empty($user_type)) {
        die("All fields are required! <a href='registration.html'>Go back</a>");
    }

    if ($password !== $confirm_password) {
        die("Passwords do not match! <a href='registration.html'>Go back</a>");
    }

    // Save to JSON file
    $json = array(
        'Id' => $id,
        'Password' => $password,
        'user_type' => $user_type,
        'Name' => $name
    );

    $jsonarray = json_encode($json, JSON_PRETTY_PRINT);
    $filename = "$id.reg_info.json"; // Use $id for file naming
    file_put_contents($filename, $jsonarray);

    // Success message and display user data
    echo "Registration successful! Here are your details:<br><br>";

    // Read the saved JSON file
    $file = file_get_contents($filename);
    $array = json_decode($file, true);

    // Display user details
    foreach ($array as $key => $value) {
        echo "<strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "<br>";
    }

    echo "<br><a href='registration.html'>Go back to Registration</a>";
} else {
    // Redirect back to the registration form
    header("Location: registration.html");
    exit();
}
?>