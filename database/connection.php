<?php
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "sk8ter23";
    $dbName = "warbonnet";

    // connect to database
    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);
    if ($conn->connect_error) {
        die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
    }
?>