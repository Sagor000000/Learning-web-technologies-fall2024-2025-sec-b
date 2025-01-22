<?php
 
    session_start();
    session_destroy();
    // setcookie('flag','true',time()+86400, '/');
    header('location: ../view/DashBoard.php');
 
?>