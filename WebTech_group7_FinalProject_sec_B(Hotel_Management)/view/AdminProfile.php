<?php
session_start(); 
require_once '../model/adminModel.php';


if(isset($_SESSION['username'])) {
    
    $adminUsername = $_SESSION['username']; 
    $admin = getAdminByUsername($adminUsername);
} else {
    
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="../asset/AdminProfile.css"/>
   
</head>
<body>
<div class="header">
  <form action="AdminDashboard.php" method="post">
    <button type="submit" class="home-button"><b> Home </b> </button>
  </form>
</div>

<center>
    <fieldset>
        <div style="width: 500px;">
            <h1 style="text-align: center;">Admin Profile</h1>
            <div style="text-align: center;">
                <img src="Adminphoto.png" alt="Profile Picture" style="width: 150px; height: 150px;">
            </div>
            <div style="margin-top: 20px;">
                <?php
                
                if ($admin && !empty($admin)) {
                    
                    echo "<p><strong>Username:</strong> " . $admin['username'] . "</p>";
                    echo "<p><strong>Password:</strong> " . $admin['password'] . "</p>";
                    echo "<p><strong>Email:</strong> " . $admin['email'] . "</p>";
                    echo "<p><strong>Phone:</strong> " . $admin['phone'] . "</p>";
                    echo "<p><strong>Code:</strong> " . $admin['code'] . "</p>";
                    echo "<p><strong>Role:</strong> " . $admin['role'] . "</p>";
                    echo "<p><strong>Address:</strong> " . $admin['address'] . "</p>";
                } else {
                    
                    echo "Admin profile not found.";
                }
                ?>
            </div>
        </div>
    </fieldset>
</center>
</body>
</html>