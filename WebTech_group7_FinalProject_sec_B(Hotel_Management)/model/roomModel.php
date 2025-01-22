<?php
require_once('Database.php');

function createRoom($room_type, $bed_type, $room_price) {
    $con = dbConnect();
    $sql = "INSERT INTO room (room_type, bed_type, room_price) VALUES ('$room_type', '$bed_type', '$room_price')";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllRooms() {
    $con = dbConnect();
    $sql = "SELECT * FROM room";
    $result = mysqli_query($con, $sql);

    $rooms = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rooms[] = $row;
    }

    return $rooms;
}

function getRoomById($id) {
    $con = dbConnect();
    $sql = "SELECT * FROM room WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $room = mysqli_fetch_assoc($result);
    return $room;
}

function updateRoom($id, $room_type, $bed_type, $room_price) {
    $con = dbConnect();
    $sql = "UPDATE room SET room_type='$room_type', bed_type='$bed_type', room_price='$room_price' WHERE id='$id'";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteRoom($id) {
    $con = dbConnect();
    $sql = "DELETE FROM room WHERE id='$id'";
    
    if(mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
?>
