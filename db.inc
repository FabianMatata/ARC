<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "hotel";

$conn = mysqli_connect($hostname, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
