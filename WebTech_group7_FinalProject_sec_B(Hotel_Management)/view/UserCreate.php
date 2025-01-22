<?php
require_once('../model/userModel.php');


if(isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    
    
    if(createUser($username, $password, $email, $dob, $phone, $gender, $blood_group)) {
        header('location: UserDisplay.php');
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
<title>User Registration Form</title>
<link rel="stylesheet" href="../asset/UserCreate.css"/>
<script src="../asset/UserValidation.js"></script>
</head>
<body>

<center>
<fieldset>
<h1>User Registration</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">
<table border="0"> 
    <tr>  
    <td> <b> Username: </b> </td>
    <td> <input type="text" id="username" name="username" class="custom-input" required> </td>
    </tr>

    <tr>  
    <td> <b> Password: </b> </td>
    <td> <input type="password" id="password" name="password" class="custom-input" required></td>
    </tr>

    <tr>  
    <td> <b> Email: </b> </td>
    <td> <input type="email" id="email" name="email" class="custom-input" required> </td>
    </tr>

    <tr>  
    <td> <b> Phone: </b> </td>
    <td> <input type="tel" id="phone" name="phone" class="custom-input" required> </td>
    </tr>


   
    <tr>  
    <td> <b> Gender: </b> </td>
    <td> 
        <label for="gender_male"><input type="radio" id="gender_male" name="gender" value="male"> Male</label>
        <label for="gender_female"><input type="radio" id="gender_female" name="gender" value="female"> Female</label>
        <label for="gender_other"><input type="radio" id="gender_other" name="gender" value="other"> Other</label>
    </td>
    </tr>
   
    <tr>  
    <td> <b> Date of Birth: </b> </td>
    <td> <input type="date" id="dob" name="dob" class="custom-input" required> </td>
    </tr>
   
    
    <tr>  
    <td> <b> Blood Group: </b> </td>
    <td> 
        <select id="blood_group" name="blood_group" class="custom-input" required>
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
    </td>
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
