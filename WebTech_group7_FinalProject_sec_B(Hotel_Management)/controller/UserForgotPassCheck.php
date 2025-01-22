<?php
require_once('../model/userModel.php');
session_start();
 
if(isset($_REQUEST['submit'])){
    $email = $_REQUEST['email'];
    $password =$_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];
 
    
    $change_result = ForgotUserPassword($email, $password, $confirm_password);
 
    if($change_result === true) {
        
        header('Location: ../view/UserLogin.php');
        exit();
    } else {
        
        echo $change_result;
    }
}
?>