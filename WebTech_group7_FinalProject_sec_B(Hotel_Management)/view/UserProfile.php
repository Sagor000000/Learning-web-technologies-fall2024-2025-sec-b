<?php
session_start(); 
require_once '../model/userModel.php'; 


if(isset($_SESSION['username'])) {
    
    $username = $_SESSION['username']; 
    $user = getUserByUsername($username); 
} else {
    
    header("Location: UserLogin.php");
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="../asset/UserProfile.css" /> 
</head>
<body>
<div class="header">
    
  <form action="UserDashboard.php" method="post">
    <button type="submit" class="home-button"><b> Home </b> </button>
  </form>

  <h2>User Profile</h2>

  <form action="UserEditProfile.php?id=<?php echo $user['id']; ?>" method="post">
   <button>Edit Profile</button>
  </form>

</div>
    
    <div class="container">
        <fieldset>
        
            <div style="text-align: center;">
                <img src="AdminPhoto.png" alt="Profile Picture" style="width: 150px; height: 150px;">
            </div>
            <table border="0">
                <tr>
                    <td><b>Username:</b></td>
                    <td><?php echo $user['username']; ?></td>
                </tr>
                <tr>
                    <td><b>Email:</b></td>
                    <td><?php echo $user['email']; ?></td>
                </tr>
                <tr>
                    <td><b>Gender:</b></td>
                    <td><?php echo $user['gender']; ?></td>
                </tr>
                <tr>
                    <td><b>Phone:</b></td>
                    <td><?php echo $user['phone']; ?></td>
                </tr>
                <tr>
                    <td><b>Date Of Birth:</b></td>
                    <td><?php echo $user['dob']; ?></td>
                </tr>
                <tr>
                    <td><b>Blood Group:</b></td>
                    <td><?php echo $user['blood_group']; ?></td>
                </tr>
            </table>
        </fieldset>
    </div>

</body>
</html>