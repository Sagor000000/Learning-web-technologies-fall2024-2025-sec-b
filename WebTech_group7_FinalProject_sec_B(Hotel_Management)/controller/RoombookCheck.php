<?php
require_once('../model/rooombookModel.php');


print_r($_POST); 

$username = $_POST['username'] ?? null;
$email = $_POST['email'] ?? null;
$phone = $_POST['phone'] ?? null;
$bedtype = $_POST['bed_type'] ?? null; 
$roomtype = $_POST['room_type'] ?? null; 
$price = $_POST['room_price'] ?? null; 
$roomid = $_POST['room_id'] ?? null;
$userid = $_POST['user_id'] ?? null;
$bid = $_POST['bid'] ?? null;   

$hello=2+2;

if (empty($username)|empty($email)|empty($phone)|empty($bedtype)|empty($roomtype)|empty($price)) {
    echo "Fill in all the boxes";
} else {
    $status = bookRoom($username, $email, $phone, $bedtype, $roomtype, $price);
    if ($status) {
        header('Location: ../view/UserDashboard.php');
        exit;
    } else {
        echo "Database error. Please try again.";
    }
}
?>
