<?php
include '../model/userModel.php'; 


if(isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];

    $id = $_GET['id'];
    
    if(updateUser($id, $username, $password, $email, $dob, $phone, $gender, $blood_group)) {
       header('location: UserProfile.php');
    } else {
        echo "Error: Unable to update";
    }
}

$id = $_GET['id'];
$user = getUserById($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Update Form</title>
<link rel="stylesheet" href="../asset/UserUpdate.css"/>
   
</head>
<body>
<center>
    <fieldset>
<h1>Edit Profile</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $_GET['id']; ?>" method="post">
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

    <tr>  
    <td> <b> Gender: </b> </td>
    <td> 
        <label for="gender_male"><input type="radio" id="gender_male" name="gender" value="male" <?php if($user['gender'] == 'male') echo 'checked'; ?>> Male</label>
        <label for="gender_female"><input type="radio" id="gender_female" name="gender" value="female" <?php if($user['gender'] == 'female') echo 'checked'; ?>> Female</label>
        <label for="gender_other"><input type="radio" id="gender_other" name="gender" value="other" <?php if($user['gender'] == 'other') echo 'checked'; ?>> Other</label>
    </td>
    </tr>

    <tr>  
    <td> <b> Date of Birth: </b> </td>
    <td> <input type="date" id="dob" name="dob" class="custom-input" value="<?php echo $user['dob']; ?>" required> </td>
    </tr>

    <tr>  
    <td> <b> Blood Group: </b> </td>
    <td> 
    <select id="blood_group" name="blood_group" class="custom-input" required>
    <option value="">Select</option>
    <option value="A+" <?php if($user['blood_group'] == 'A+') echo 'selected'; ?>>A+</option>
    <option value="A-" <?php if($user['blood_group'] == 'A-') echo 'selected'; ?>>A-</option>
    <option value="B+" <?php if($user['blood_group'] == 'B+') echo 'selected'; ?>>B+</option>
    <option value="B-" <?php if($user['blood_group'] == 'B-') echo 'selected'; ?>>B-</option>
    <option value="AB+" <?php if($user['blood_group'] == 'AB+') echo 'selected'; ?>>AB+</option>
    <option value="AB-" <?php if($user['blood_group'] == 'AB-') echo 'selected'; ?>>AB-</option>
    <option value="O+" <?php if($user['blood_group'] == 'O+') echo 'selected'; ?>>O+</option>
    <option value="O-" <?php if($user['blood_group'] == 'O-') echo 'selected'; ?>>O-</option>
</select>

    </td>
    </tr>

    
    <tr>
    <td><b>Password:</b></td>
    <td><input type="password" id="password" name="password" class="custom-input" required></td>
</tr>

<tr>
    <td></td>
    <td><button type="submit" name="submit" value="Update" class="submit-button"><b>Update</b></button></td>
    <td></td>
</tr>


</table> 
</form>
</fieldset>
</center>
</body>
</html>
