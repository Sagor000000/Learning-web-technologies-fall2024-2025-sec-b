<?php
require_once('Database.php');

function createStaff($name, $age, $role) {
    $con = dbConnect();
    $sql = "INSERT INTO staff (name, age, role) VALUES ('$name', '$age', '$role')";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllStaff() {
    $con = dbConnect();
    $sql = "SELECT * FROM staff";
    $result = mysqli_query($con, $sql);

    $staffList = [];
    while($row = mysqli_fetch_assoc($result)) {
        $staffList[] = $row;
    }

    return $staffList;
}

function getStaffById($id) {
    $con = dbConnect();
    $sql = "SELECT * FROM staff WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $staff = mysqli_fetch_assoc($result);
    return $staff;
}

function updateStaff($id, $name, $age, $role) {
    $con = dbConnect();
    $sql = "UPDATE staff SET name='$name', age='$age', role='$role' WHERE id='$id'";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteStaff($id) {
    $con = dbConnect();
    $sql = "DELETE FROM staff WHERE id='$id'";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
?>
