<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Validate inputs
    if (empty($username) || empty($password)) {
        echo "Both fields are required.";
        exit;
    }

    // File to store user data
    $file = 'users.json';

    // Read existing users from file
    if (!file_exists($file)) {
        echo "No users registered.";
        exit;
    }

    $users = json_decode(file_get_contents($file), true);

    // Check if username/email exists and password matches
    foreach ($users as $user) {
        if (($user['username'] === $username || $user['email'] === $username) &&
            password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['username'];
            header("Location:home.php");
            exit;
        }
    }

    echo "Invalid username/email or password.";
    exit;
}
?>
