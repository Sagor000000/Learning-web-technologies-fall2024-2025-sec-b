<?php
session_start(); 


if (!isset($_SESSION['username'])) {
    header("Location: UserLogin.php");
    exit(); 
}

require_once '../model/userModel.php';

$username = $_SESSION['username'];
$user = getUserByUsername($username);


if ($user === false) {
    echo "Error: User data not found!";
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];

    
    if (updateInformation($username, $email, $dob, $phone, $gender, $blood_group)) {
        header("Location: UserProfile.php");
        exit(); 
    } else {
        echo "Update failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../asset/EditProfile.css"/>
   
</head>
<body>
    <center>
    <fieldset>    
    <h1>Edit Profile</h1>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateLoginForm()">
      <table border="0"> 

       <tr>  
        <td> <b> Email: </b> </td>
        <td> <input type="email" id="email" name="email" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>" class="custom-input"> </td>
       </tr>

       <tr>
        <td> <b> Date of Birth: </b> </td>
        <td> <input type="date" id="dob" name="dob" value="<?php echo isset($user['dob']) ? $user['dob'] : ''; ?>" class="custom-input"> </td>
       </tr>

       <tr>
        <td> <b> Phone: </b> </td>
        <td> <input type="text" id="phone" name="phone" value="<?php echo isset($user['phone']) ? $user['phone'] : ''; ?>" class="custom-input"> </td>
       </tr>

       <tr>
        <td> <b> Gender: </b> </td>
        <td> 
            <label for="gender_male"><input type="radio" id="gender_male" name="gender" value="male" <?php if (isset($user['gender']) && $user['gender'] == 'male') echo 'checked'; ?>> Male</label>
            <label for="gender_female"><input type="radio" id="gender_female" name="gender" value="female" <?php if (isset($user['gender']) && $user['gender'] == 'female') echo 'checked'; ?>> Female</label>
            <label for="gender_other"><input type="radio" id="gender_other" name="gender" value="other" <?php if (isset($user['gender']) && $user['gender'] == 'other') echo 'checked'; ?>> Other</label>
        </td>
       </tr>

       <tr>
        <td> <b> Blood Group: </b> </td>
        <td> 
            <select id="blood_group" name="blood_group" class="custom-input">
                <option value="A+" <?php if (isset($user['blood_group']) && $user['blood_group'] == 'A+') echo 'selected'; ?>>A+</option>
                <option value="A-" <?php if (isset($user['blood_group']) && $user['blood_group'] == 'A-') echo 'selected'; ?>>A-</option>
                
            </select>
        </td>
       </tr>

       <tr>
        <td></td>
        <td> <button type="submit" name="submit" value="Update Information" class="submit-button"><b> Update Information </b></button> </td>
       </tr>

      </table>
    </form>
</fieldset>
</center>
</body>
</html>
