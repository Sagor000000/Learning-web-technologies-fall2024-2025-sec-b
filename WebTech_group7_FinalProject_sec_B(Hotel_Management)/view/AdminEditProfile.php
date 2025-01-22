<?php
session_start(); 

if (!isset($_SESSION['username'])) {
    
    header("Location: AdminLogin.php");
    exit(); 
}

require_once '../model/adminModel.php';


$username = $_SESSION['username'];

$admin = getAdminByUsername($username);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $code = $_POST['code']; 
    $address = $_POST['address'];

    
    if (updateInformation($username, $email, $phone, $role, $code, $address)) {
        header("Location: AdminProfile.php");
        exit(); 
    } else {
        echo "Update failed"; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../asset/AdminEditProfile.css"/>
    <script src="../asset/EditProfileValidation.js"> </script>
   
</head>
<body>
<div class="header">
  <form action="AdminDashboard.php" method="post">
    <button type="submit" class="home-button"><b> Home </b> </button>
  </form>
</div>
    <center>
    <fieldset>    
    <h1>Edit Profile</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">
      <table border="0"> 

       <tr>  
        <td> <b> Email: </b> </td>
        <td> <input type="email" id="email" name="email" value="<?php echo $admin['email']; ?>" class="custom-input"> </td>
       </tr>
       
       <tr>
        <td> <b> Phone: </b> </td>
        <td> <input type="text" id="phone" name="phone" value="<?php echo $admin['phone']; ?>" class="custom-input"> </td>
       </tr>

       <tr>
        <td> <b> Role: </b> </td>
        <td> <input type="text" id="role" name="role" value="<?php echo $admin['role']; ?>" class="custom-input"> </td>
       </tr> 

       <tr>
        <td> <b> Code: </b> </td>
        <td> <input type="text" id="code" name="code" value="<?php echo $admin['code']; ?>" class="custom-input"> </td>
       </tr>

       <tr>
        <td> <b> Address: </b> </td>
        <td> <input type="text" id="address" name="address" value="<?php echo $admin['address']; ?>" class="custom-input"> </td>
       </tr>

       <tr>
        <td></td>
        <td> <button type="submit" name="submit" value="Update Information" class="submit-button"><b> Update Information </b></button> </td>
       </tr>

      </table>
    </form>
</fieldset>
</center>
</body>
</html>
