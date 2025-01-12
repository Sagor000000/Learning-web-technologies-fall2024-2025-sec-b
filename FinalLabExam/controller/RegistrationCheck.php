<?php
require_once('../model/userModel.php');


$name = $_REQUEST['name'];
$tel = $_REQUEST['Phone'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password']; 



if (
    $name == "" || $tel == "" || $username == "" || $password == "" 
) {
    echo "Please fill in all the required fields.";
} else {
    
    $status = createUser($name, $tel, $username, $password);
    if ($status) {
        header('location: ../view/UserLogin.php');
    } else {
        echo "Database error. Please try again.";
    }
}
?>
