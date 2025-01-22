<?php
require_once('../model/adminModel.php');
session_start();

if(isset($_POST['submit'])){
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];
    
    
    $change_result = ChangeAdminPassword($current_password, $new_password, $confirm_new_password);

    if($change_result === true) {
        
        header('location:../view/AdminLogin.php');
        exit();
    } else {
        
        echo $change_result;
    }
}
?>
