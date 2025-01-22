<?php
include '..\model\roomModel.php';
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
<title>Room Management</title>
<link rel="stylesheet" href="../asset/RoomDisplay.css"/>
   
</head>
<body>
<div class="header">
  <h2 style="text-align: center; margin-top: 0;">Your Booked Room</h2>
  
  <form action="UserDashboard.php" method="post">
    <button type="submit" class="home-button"><b> Home </b> </button>
  </form>
</div>

<center>
<fieldset>

<table>
  <tr>
    <th>Book ID</th>
    <th>Room Type</th>
    <th>Bed Type</th>
    <th>Price</th>
  </tr>
 
<?php
$con = dbConnect(); 
$sql = "SELECT * FROM bookroom"; 
$result = mysqli_query($con, $sql);  

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $bid = $row['bid'];
        $room_type = $row['roomtype'];
        $bed_type = $row['bedtype'];
        $room_price = $row['price'];

        echo '<tr>
            <th scope="row"> '.$bid.' </th>
        
            <td>'.$room_type.'</td>
            <td>'.$bed_type.'</td>
            <td>'.$room_price.'</td>
            
        
            </tr>';
    }
} else {
    echo '<tr><td colspan="6">No users found</td></tr>';
}
?>  
</table>
</fieldset>
</center>
</body>
</html>
