<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "agrocuture";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
