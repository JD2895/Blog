<?php

//Connecting to the blog posts database

$dbServername = "localhost";
$dbUsername = "phpmyadmin";
$dbPassword = "phpmyadmin";
$dbName = "blog";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

//Setting session time-zone to Toronto

$sql = "SET SESSION time_zone = '-4:00'";
$result = mysqli_query($conn, $sql);

?>