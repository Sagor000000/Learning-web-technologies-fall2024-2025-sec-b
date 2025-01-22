<?php
include '..\model\roomModel.php';

if(isset($_POST['submit'])){
    $room_type = $_POST['room_type'];
    $bed_type = $_POST['bed_type'];
    $room_price = $_POST['room_price'];
    
    $id = $_GET['id'];

    if(updateRoom($id, $room_type, $bed_type, $room_price)) {
        header('location: RoomDisplay.php');
    } else {
        echo "Error: Unable to update room.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Room Management</title>
<link rel="stylesheet" href="../asset/RoomUpdate.css"/>
   

</head>
<body>

<center>
<fieldset>
<h1>Room Management</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $_GET['id']; ?>" method="post">
<table border="0">
  <tr>
    <td><label for="room_type"> <b> Type of Room: </b> </label></td>
    <td>
      <select id="room_type" name="room_type" class="custom-input"  required>
          <option value="Single"> <b> Single Room </b> </option>
          <option value="Double"> <b> Double Room </b> </option>
          <option value="Luxury"> <b> Luxury </b> </option>
      </select>
    </td>
  </tr>
  <tr>
    <td><label for="bed_type"> <b> Type of Bed: </b> </label></td>
    <td>
      <select id="bed_type" name="bed_type" class="custom-input" required>
          <option value="Single"> <b> Single Bed </b> </option>
          <option value="Double"> <b> Double Bed </b> </option>
      </select>
    </td>
  </tr>
  <tr>
    <td><label for="room_price"> <b> Room Price: </b> </label></td>
    <td><input type="number" id="room_price" name="room_price" class="custom-input" required></td>
  </tr>
  <tr>
    <td></td>
    <td> <button type="submit" name="submit" value="submit" class="submit-button"><b> Update </b></button> </td>
  </tr>
</table>
</form> 
</fieldset>
</center>

</body>
</html>
