<?php
include '..\model\serviceModel.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if(deleteService($id)) {
        header('location: ServiceDisplay.php');
        exit();
    } else {
        echo "Error: Failed to delete";
        exit();
    }
}
?>
