<?php
require_once('Database.php');

function login($username, $password){
    $con = dbConnect();
    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}

function getAllAdmin(){
    $con = dbConnect();
    $sql = "SELECT * FROM admins";
    $result = mysqli_query($con, $sql);

    $admins =[];
    while($row = mysqli_fetch_assoc($result)){
        array_push($admins, $row);
    }

    return $admins;

}

function getAdminByUsername($username){
    $con = dbConnect();
    $sql = "SELECT * FROM admins WHERE username='$username'";
    $result = mysqli_query($con, $sql);
    $admin = mysqli_fetch_assoc($result);
    return $admin;
}

function ForgotAdminPassword($code, $password, $confirm_password) {
    $con = dbConnect();
    $query = "SELECT * FROM admins WHERE code='$code'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if ($password === $confirm_password) {
            mysqli_query($con, "UPDATE admins SET password='$password' WHERE code='$code'");
            return true; 
        } else {
            return "Passwords do not match!";
        }
    } else {
        return "Code Not Matched!";
    }

    mysqli_close($con);
}


function ChangeAdminPassword($current_password, $new_password, $confirm_new_password){
    $con = dbConnect();

    $sql = "SELECT * FROM admins";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($current_password == $row['password']) {
        if ($new_password == $confirm_new_password) {
            
            $update_sql = "UPDATE admins SET password='$new_password'";
            if(mysqli_query($con, $update_sql)) {
                return true; 
            } else {
                return false; 
            }
        } else {
            return "New passwords do not match!";
        }
    } else {
        return "Current password is incorrect!";
    }
}

function updateInformation($username, $email, $phone, $role, $code, $address) {
    $con = dbConnect();
    
    $sql = "UPDATE admins SET email='$email', phone='$phone', role='$role', code='$code', address='$address' WHERE username='$username'";
    
    if (mysqli_query($con, $sql)) {
        mysqli_close($con);
        return true;
    } else {
        mysqli_close($con); 
        return false; 
    }
}



?>
