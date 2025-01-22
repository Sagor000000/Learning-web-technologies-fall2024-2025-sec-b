<?php
  session_start();

  
  if(!isset($_SESSION['username'])){
    header('location: UserLogin.php');
    exit(); 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../asset/UserDashboard.css" />
</head>
<body>
  
<div class="header">
  <form action="Dashboard.php" method="post">
    <button type="submit" class="home-button"><b> Home </b> </button>
  </form>

  <h1 style="color:#fff;">Welcome <?php echo $_SESSION['username'];?>!</h1>

  <form action="UserProfile.php" method="post">
    <button type="submit" class="profile-button"><b>Profile </b></button>
  </form>
</div>

<div class="content">
  <fieldset>
    <button onclick="location.href='../view/RoomBook.php'">Book Now</button>
    <button onclick="location.href='../view/ShowRoomBook.php'">Show Booked Room</button>
    <button onclick="location.href='../view/FileUpload.php'">Upload Documents</button>
    <button onclick="location.href='../Controller/Logout.php'">Logout</button>
  
  </fieldset>
</div>

</body>
</html>
