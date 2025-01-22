<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hotel";

function dbConnect(){
    // global $host;
     global $dbname;
    // global $dbuser;
     global $dbpass;

    $con = mysqli_connect($GLOBALS['host'], $GLOBALS['dbuser'], $dbpass, $dbname);
    return $con;
}


?>