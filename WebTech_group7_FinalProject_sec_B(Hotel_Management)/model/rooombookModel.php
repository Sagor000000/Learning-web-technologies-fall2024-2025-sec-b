<?php
require_once('Database.php');

function bookRoom($username, $email, $phone, $bedtype, $roomtype, $price) {
    $con = dbConnect();
    $sql = "INSERT INTO bookroom (username, email, phone, bedtype, roomtype, price) VALUES ('$username', '$email', '$phone', '$bedtype', '$roomtype', '$price')";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}


?>