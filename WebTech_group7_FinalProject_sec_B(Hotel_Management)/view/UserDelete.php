<?php
include '..\model\userModel.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if(deleteUser($id)) {
        header('location: UserDisplay.php');
        exit();
    } else {
        echo "Error: Failed to delete";
        exit();
    }
}
?>
