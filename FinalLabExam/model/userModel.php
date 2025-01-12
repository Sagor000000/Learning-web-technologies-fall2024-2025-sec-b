<?php
require_once('Database.php');

function login($username, $password){
    $con = dbConnect();
    $sql = "select * from user where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
 
    if($count == 1){
        return true;
    }else{
        return false;
    }
}


function createUser($username, $password, $email, $dob, $phone, $gender, $blood_group) {
    $con = dbConnect();
    $sql = "INSERT INTO user (username, password, email, dob, phone, gender, blood_group) VALUES ('$username', '$password', '$email', '$dob', '$phone', '$gender', '$blood_group')";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllUsers() {
    $con = dbConnect();
    $sql = "SELECT * FROM user";
    $result = mysqli_query($con, $sql);

    $users = [];
    while($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }

    return $users;
}
function getUserByUsername($username) {
    $con = dbConnect();
    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function getUserById($id) {
    $con = dbConnect();
    $sql = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function updateUser($id, $username, $password, $email, $dob, $phone, $gender, $blood_group) {
    $con = dbConnect();
    $sql = "UPDATE user SET username='$username', password='$password', email='$email', dob='$dob', phone='$phone', gender='$gender', blood_group='$blood_group' WHERE id='$id'";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteUser($id) {
    $con = dbConnect();
    $sql = "DELETE FROM user WHERE id='$id'";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function ForgotUserPassword($email, $password, $confirm_password) {
    $con = dbConnect();
    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if ($password === $confirm_password) {
            // Update the password directly without hashing
            mysqli_query($con, "UPDATE user SET password='$password' WHERE email='$email'");
            return true; // Password changed successfully
        } else {
            return "Passwords do not match!";
        }
    } else {
        return "Email not found!";
    }

    mysqli_close($con);
}

function updateInformation($username, $email, $dob, $phone, $gender, $blood_group) {
    $con = dbConnect();
    
    $sql = "UPDATE user SET email='$email', phone='$phone', dob='$dob', gender='$gender', blood_group='$blood_group' WHERE username='$username'";
    
    if (mysqli_query($con, $sql)) {
        mysqli_close($con); // Close connection
        return true; // Information updated successfully
    } else {
        mysqli_close($con); // Close connection
        return false; // Failed to update information
    }
}



?>
