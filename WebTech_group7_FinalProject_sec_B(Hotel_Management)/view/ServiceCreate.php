<?php
include '..\model\serviceModel.php';


if(isset($_POST['submit'])) {
    
    $feedback_email = $_POST['feedback_email'];
    $booking_email = $_POST['booking_email'];
    $transportation_type = $_POST['transportation_type'];
    $discounts = $_POST['discounts'];
    
    
    if(createService($feedback_email, $booking_email, $transportation_type, $discounts)) {
        header('location: ServiceDisplay.php');
    } else {
        echo "Error: Unable to create room.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Configuration</title>
  <link rel="stylesheet" href="../asset/ServiceCreate.css"/>
   
 
</head>
<body>
  <center>
    <fieldset>
    <h1>Service Configuration</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <table border="0">
        <tr>
          <td>
            <fieldset>
              <legend><strong>Guest Feedback & Support</strong></legend>
              <label for="feedback_email">Email for Feedback:</label>
              <input type="email" id="feedback_email" name="feedback_email" class="custom-input"> 
            </fieldset>
          </td>
          <td>
            <fieldset>
              <legend><strong>Event & Conference Booking</strong></legend>
              <label for="booking_email">Booking Email:</label>
              <input type="email" id="booking_email" name="booking_email" class="custom-input">
            </fieldset>
          </td>
        </tr>
        <tr>
          <td>
            <fieldset>
              <legend><strong>Transportation Help & Facilities</strong></legend>
              <label for="transportation_type">Transportation Type:</label>
              <input type="text" id="transportation_type" name="transportation_type" class="custom-input" required>
            </fieldset>
          </td>
          <td>
            <fieldset>
              <legend><strong>Special Offers & Discounts</strong></legend>
              <label for="discounts">Discount:</label>
              <input type="text" id="discounts" name="discounts" class="custom-input">
            </fieldset>
          </td>
        </tr>
      </table>
      <br>
      <button type="submit" name="submit" class="submit-button"><b> Save Configuration </b> </button>
    </form>
    </fieldset>
</center>

</body>
</html>
