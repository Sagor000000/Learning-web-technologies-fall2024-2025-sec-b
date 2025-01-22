<?php
  session_start();

  
  if(!isset($_SESSION['flag'])){
    header('location: AdminLogin.php');
    exit(); 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="../asset/AdminDashboard.css"/>

</head>
<body>
<div class="header">
  <form action="Dashboard.php" method="post">
    <button type="submit" class="home-button"><b> Home </b> </button>
  </form>
  <h1 style="color:#59D5E0;">Welcome <?php echo $_SESSION['username'];?>!</h1>
  <form action="../Controller/Logout.php" method="post">
  <button type="submit" class="logout-button"><b>Logout</b></button>
  </form>

</div>



  <div class="content">
    <center>
      <fieldset>
        <table>
          <tr>
          <td><form action="../view/UserDisplay.php"><button type="submit">Manage Users</button></form></td>
            <td><form action="../view/StaffDisplay.php"><button type="submit">Manage Staffs</button></form></td>
            
          </tr>
          <tr>
            <td><form action="../view/RoomDisplay.php"><button type="submit">Manage Booking</button></form></td>
            <td><form action="../view/ServiceDisplay.php"><button type="submit">Manage Services</button></form></td>
          </tr>
          <tr>
            <td><form action="AdminProfile.php"><button type="submit">View Profile</button></form></td>
            <td><form action="AdminEditProfile.php"><button type="submit">Edit Profile</button></form></td>
          </tr>
          <tr>
            <td><form action="FileUpload.php"><button type="submit">Upload Files</button></form></td>
            <td><form action="ChangePassword.php"><button type="submit">Change Password</button></form></td>
          </tr>
          
        </table>

      </fieldset>
    </center>
  </div>

</body>
</html>
