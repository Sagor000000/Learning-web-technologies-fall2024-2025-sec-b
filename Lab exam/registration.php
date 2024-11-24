<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate inputs
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // File to store user data
    $file = 'users.json';

    // Read existing users from file
    $users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

    // Check if username or email exists
    foreach ($users as $user) {
        if ($user['username'] === $username || $user['email'] === $email) {
            echo "Username or email already exists.";
            exit;
        }
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Add new user to the array
    $users[] = [
        'username' => $username,
        'email' => $email,
        'password' => $hashed_password
    ];

    // Save users back to the file
    file_put_contents($file, json_encode($users));

    // Redirect to login page
    header("Location: login.html");
    exit;
}
?>
