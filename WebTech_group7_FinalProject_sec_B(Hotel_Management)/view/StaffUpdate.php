<?php
include '../model/staffModel.php'; 


$id = $_GET['id'];
$staff = getStaffById($id);


if(isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $role = $_POST['role']; 

    
    if(updateStaff($id, $name, $age, $role)) {
       header('location: StaffDisplay.php');
    } else {
        echo "Error: Unable to update";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Update Form</title>
<link rel="stylesheet" href="../asset/StaffUpdate.css"/>
   
</head>
<body>

<center>
<fieldset>
<h1>Staff Update Form</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $_GET['id']; ?>" method="post">
<table border="0">

<tr>
<td> <b> Name: </b> </td>
<td> <input type="text" id="name" name="name"  class="custom-input" value="<?php echo $staff['name']; ?>" required> </td>
</tr>

<tr>
<td> <b> Age: </b> </td>
<td> <input type="number" id="age" name="age" class="custom-input" value="<?php echo $staff['age']; ?>" required> </td>
</tr>

<tr>
<td> <b> Role: </b> </td>
<td> <input type="text" id="role" name="role" class="custom-input" value="<?php echo $staff['role']; ?>" required> </td>
</tr>

<tr>
<td></td>
<td> <button type="submit" name="submit" value="Update" class="submit-button"><b> Update </b></button> </td>
</tr>

</table>
</form>
</fieldset>
</center>
</body>
</html>
