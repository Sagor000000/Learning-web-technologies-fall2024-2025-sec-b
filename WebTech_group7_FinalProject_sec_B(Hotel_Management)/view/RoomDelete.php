<?php
include '..\model\roomModel.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if(deleteRoom($id)) {
        header('location: RoomDisplay.php');
        exit();
    } else {
        echo "Error: Failed to delete room.";
        exit();
    }
}
?>
