<?php
include '..\model\staffModel.php';


if(isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $role = $_POST['role'];

    
    if(createStaff($name, $age, $role)) {
        header('location: StaffDisplay.php');
    } else {
        echo "Error: Unable to create";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Registration Form</title>
<link rel="stylesheet" href="../asset/StaffCreate.css"/>
<script src="../asset/StaffValidation.js"> </script>
   

</head>
<body>

<center>
<fieldset>
<h1>Staff Registration</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">
<table border="0">

    <tr>
    <td> <b> Name: </b> </td>
    <td> <input type="text" id="name" name="name" class="custom-input" required> </td>
    </tr>

    <tr>
    <td> <b> Age: </b> </td>
    <td> <input type="number" id="age" name="age" class="custom-input" required> </td>
    </tr>

    <tr>
    <td> <b> Role: </b> </td>
    <td> <input type="text" id="role" name="role" class="custom-input"  required> </td>
    </tr>

    <tr>
    <td></td>
    <td> <button type="submit" name="submit" value="submit" class="submit-button"><b> Submit </b></button> </td>
    </tr>

</table>    
</form>

</fieldset>
</center>

</body>
</html>
