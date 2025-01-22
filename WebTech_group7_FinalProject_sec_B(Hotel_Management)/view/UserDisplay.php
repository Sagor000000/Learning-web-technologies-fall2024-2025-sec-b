<?php
include '..\model\userModel.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Management</title>
<link rel="stylesheet" href="../asset/UserDisplay.css"/>
   

</head>
<body>
<div class="header">
    <form action="AdminDashboard.php" method="post">
    <button type="submit" class="home-button">Home</button>
    </form>
    <h2>User Management</h2>
    <form action="UserCreate.php" method="get">
    <button type="submit" class="add-button">Add User</button>
    </form>
</div>
<center>
<fieldset>
    
<!-- Table to display user data -->
<table>
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
    <th>Date of Birth</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>Blood Group</th>
    <th>Password</th>
    <th>Actions</th>
  </tr>
 
<?php
$con = dbConnect(); 
$sql = "SELECT * FROM user"; 
$result = mysqli_query($con, $sql);  

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $username = $row['username'];
        $email = $row['email'];
        $dob = $row['dob'];
        $phone = $row['phone'];
        $gender = $row['gender'];
        $blood_group = $row['blood_group'];
        $password = $row['password'];

        echo '<tr>
            <th scope="row"> '.$id.' </th>
        
            <td>'.$username.'</td>
            <td>'.$email.'</td>
            <td>'.$dob.'</td>
            <td>'.$phone.'</td>
            <td>'.$gender.'</td>
            <td>'.$blood_group.'</td>
            <td>'.$password.'</td>
            <td>
            <button><a href="UserUpdate.php?id=' . $id . '">Update</a></button>
            <button><a href="UserDelete.php?id=' . $id . '">Delete</a></button>
        </td>
        
            </tr>';
    }
} else {
    echo '<tr><td colspan="9">No users found</td></tr>';
}
?>  
</table>
</fieldset>
</center>
</body>
</html>
