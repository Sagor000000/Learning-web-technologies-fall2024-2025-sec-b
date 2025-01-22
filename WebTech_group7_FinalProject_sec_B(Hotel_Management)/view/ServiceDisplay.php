<?php
include '..\model\serviceModel.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Service Management</title>
<link rel="stylesheet" href="../asset/ServiceDisplay.css"/>
   

</head>
<body>
<div class="header">
    <form action="AdminDashboard.php" method="post">
        <button type="submit" class="home-button">Home</button>
    </form>
    <h2>Service Management</h2>
    <form action="ServiceCreate.php" method="post">
    <button type="submit" class="add-button">Add Service</button>
    </form>
</div>
<center>
<fieldset>

<!-- Table to display service data -->
<table>
  <tr>
    
    <th>Guest Feedback Email</th>
    <th>Event Booking Email</th>
    <th>Transportation Type</th>
    <th>Promotion & Discount</th>
    <th>Actions</th>
  </tr>
 
  <?php
  $con = dbConnect(); 
  $sql = "SELECT * FROM services"; 
  $result = mysqli_query($con, $sql);  

  if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $feedback_email = $row['feedback_email'];
          $booking_email = $row['booking_email'];
          $transportation_type = $row['transportation_type'];
          $discounts = $row['discounts'];

          echo '<tr>
              <td>'.$feedback_email.'</td>
              <td>'.$booking_email.'</td>
              <td>'.$transportation_type.'</td>
              <td>'.$discounts.'</td>
              <td>
                  <button><a href="ServiceUpdate.php?id=' . $id . '">Update</a></button>
                  <button><a href="ServiceDelete.php?id=' . $id . '">Delete</a></button>
              </td>
              </tr>';
      }
  } else {
      echo '<tr><td colspan="5">No services found</td></tr>';
  }
  ?>  
</table>
</fieldset>
</center>
</body>
</html>
