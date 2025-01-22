<?php
session_start();
require_once('../model/userModel.php');

$username  =  $_REQUEST['username'];
$password  =  $_REQUEST['password'];

if($username == "" || $password == ""){
    echo "Null username or password!";
} 
 else {
            $status = login($username, $password);
            if($status){
                $_SESSION['username'] = $username;
                setcookie('flag', 'true', time() + (30 * 24 * 60 * 60), '/');
                header('location: ../view/UserDashboard.php');
                exit(); 
            }else{
                echo "Invalid username or password!";
            }
        }

?>
