<?php

$dbServername = "localhost";
$dbUsername = "phpmyadmin";
$dbPassword = "phpmyadmin";
$dbName = "blog";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql = "SET time_zone = timezone;";
$result = mysqli_query($conn, $sql);

?>