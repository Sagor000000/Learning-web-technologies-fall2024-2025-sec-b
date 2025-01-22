<?php
include '..\model\staffModel.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if(deleteStaff($id)) {
        header('location: StaffDisplay.php');
        exit();
    } else {
        echo "Error: Failed to delete";
        exit();
    }
}
?>
