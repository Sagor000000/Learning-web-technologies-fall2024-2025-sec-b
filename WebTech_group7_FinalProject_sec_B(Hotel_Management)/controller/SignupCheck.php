<?php
require_once('../model/userModel.php');

//$username = $_REQUEST['username'];
//$password = $_REQUEST['password'];
//$email = $_REQUEST['email'];
//$dob = $_REQUEST['dob'];
//$phone = $_REQUEST['phone']; 
//$gender = $_REQUEST['gender'];
//$blood_group = $_REQUEST['blood_group'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$dob = $_REQUEST['dob'];
$phone = $_REQUEST['phone']; 
$gender = $_REQUEST['gender'];
$blood_group = $_REQUEST['blood_group'];

if (
    $username == "" || $password == "" || $email == "" || $dob == "" || $phone == "" || $gender == "" || $blood_group == ""
) {
    echo "Please fill in all the required fields.";
} else {
    
    $status = createUser($username, $password, $email, $dob, $phone, $gender, $blood_group);
    if ($status) {
        header('location: ../view/UserLogin.php');
    } else {
        echo "Database error. Please try again.";
    }
}
?>
