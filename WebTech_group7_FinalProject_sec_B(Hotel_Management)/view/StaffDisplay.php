<?php
include '..\model\roomModel.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Management</title>
<link rel="stylesheet" href="../asset/StaffDisplay.css"/>
   

</head>
<body>
<div class="header">
    <form action="AdminDashboard.php" method="post">
        <button type="submit" class="home-button">Home</button>
    </form>
    <h2>Staff Management</h2>
    <form action="StaffCreate.php" method="get">
    <button type="submit" class="add-button">Add Staff</button>
    </form>
</div>
<center>
<fieldset>


<!-- Table to display staff data -->
<table border="0">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Role</th>
    <th>Actions</th>
  </tr>
  
<?php
$con = dbConnect(); 
$sql = "SELECT * FROM staff"; 
$result = mysqli_query($con, $sql);  

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $age = $row['age'];
        $role = $row['role'];
      

        echo '<tr>
            <th scope="row">'.$id.'</th>
        
            <td>'.$name.'</td>
            <td>'.$age.'</td>
            <td>'.$role.'</td>
            
            <td>
            <button><a href="StaffUpdate.php?id=' . $id . '">Update</a></button>
            <button><a href="StaffDelete.php?id=' . $id . '">Delete</a></button>
            </td>
        
            </tr>';
    }
} else {
    echo '<tr><td colspan="5">No Staff found</td></tr>';
}
?>  
</table>
</fieldset>
</center>
</body>
</html>
