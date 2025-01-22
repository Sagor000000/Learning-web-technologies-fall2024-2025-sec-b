<?php
require_once('Database.php');

function createService($feedback_email, $booking_email, $transportation_type, $discounts) {
    $con = dbConnect();
    $sql = "INSERT INTO services (feedback_email, booking_email, transportation_type, discounts) VALUES ('$feedback_email', '$booking_email', '$transportation_type', '$discounts')";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllServices() {
    $con = dbConnect();
    $sql = "SELECT * FROM services";
    $result = mysqli_query($con, $sql);

    $services = [];
    while($row = mysqli_fetch_assoc($result)) {
        $services[] = $row;
    }

    return $services;
}

function getServiceById($id) {
    $con = dbConnect();
    $sql = "SELECT * FROM services WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $service = mysqli_fetch_assoc($result);
    return $service;
}

function updateService($id, $feedback_email, $booking_email, $transportation_type, $discounts) {
    $con = dbConnect();
    $sql = "UPDATE services SET feedback_email='$feedback_email', booking_email='$booking_email', transportation_type='$transportation_type', discounts='$discounts' WHERE id='$id'";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteService($id) {
    $con = dbConnect();
    $sql = "DELETE FROM services WHERE id='$id'";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
?>
