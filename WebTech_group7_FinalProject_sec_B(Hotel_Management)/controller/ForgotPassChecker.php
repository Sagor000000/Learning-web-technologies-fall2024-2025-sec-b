<?php
require_once('../model/adminModel.php');
session_start();

if(isset($_POST['submit'])){
    $code = $_POST['code'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    
    $change_result = ForgotAdminPassword($code, $password, $confirm_password);

    if($change_result === true) {
        
        header('location:../view/AdminLogin.php');
        exit();
    } else {
        
        echo $change_result;
    }
}
?>
