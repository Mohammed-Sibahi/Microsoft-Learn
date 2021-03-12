<?php

$serverName = "localhost";

$dBUsername = "root";

$dBPassword = "";

$dBName = "microsoftlearn";


/*we define a variable $conn and use a mysqli function (mysqli_connect) to make the connection using 
the servername, username, password, and databse name   */
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);


// if the connection fails, a message will show indicating a failed connection and the number of error. 
if (!$conn) {

    die("connection failed: " . mysqli_connect_error());
}