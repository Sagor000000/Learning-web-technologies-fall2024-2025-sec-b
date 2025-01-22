<?php
include '../model/userModel.php'; 
include '../model/roomModel.php';
include '../controller/RoombookCheck.php';


if(isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $room_type = $_POST['room_type'];
    $bed_type = $_POST['bed_type'];

    $user_id = $_GET['user_id']; 
    $room_id = $_GET['room_id']; 

      
}


$user_id = $_GET['user_id'];
$room_id = $_GET['room_id'];
$user = getUserById($user_id);
$room = getRoomById($room_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Profile and Room Preferences</title>
<link rel="stylesheet" href="../asset/RoomBook.css"/>
<style>
    .large-button {
        font-size: 1.2em;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }
    .large-button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="header">
  <h2 style="text-align: center; margin-top: 0;">Confrom your Booking</h2>
  
  <form action="UserDashboard.php" method="post">
    <button type="submit" class="home-button"><b> Home </b> </button>
  </form>
</div>
<center>
    <fieldset>
<h1>Room Booking</h1>

<form action="../controller/RoombookCheck.php" method="post">
    <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
    <input type="hidden" name="room_id" value="<?php echo $_GET['room_id']; ?>">
<table border="0"> 
    <tr>  
    <td> <b> Username: </b> </td>
    <td> <input type="text" id="username" name="username" class="custom-input" value="<?php echo $user['username']; ?>" required> </td>
    </tr>

    <tr>  
    <td> <b> Email: </b> </td>
    <td> <input type="email" id="email" name="email" class="custom-input" value="<?php echo $user['email']; ?>" required> </td>
    </tr>

    <tr>  
    <td> <b> Phone: </b> </td>
    <td> <input type="tel" id="phone" name="phone" class="custom-input" value="<?php echo $user['phone']; ?>" required> </td>
    </tr>


    <td> <b> Bed Type: </b> </td>
    <td>
        <input type="text" id="bed_type" name="bed_type" class="custom-input" value="<?php echo $room['bed_type']; ?>" required>
    </td>
    </tr>

    <td> <b> Room Type: </b> </td>
    <td>
        <input type="text" id="room_type" name="room_type" class="custom-input" value="<?php echo $room['room_type']; ?>" required>
    </td>
    </tr>

    <tr>  
    <td> <b> Price: </b> </td>
    <td>
        <input type="text" id="room_price" name="room_price" class="custom-input" value="<?php echo $room['room_price']; ?>" required>
    </td>
    </tr>

    

<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
</table>
<button type="submit" name="submit" value="submit" class="large-button"><b>Confirm</b></button> 
</form>
</fieldset>
</center>
</body>
</html>

