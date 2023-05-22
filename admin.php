<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
<table class="table">
    <h1>Reserved Rooms</h1>
<tr>
    <th>S/N</th>
<th>Name</th>
<th>Nationality</th>
<th>Email</th>
<th>Phone</th>
<th>Gender</th>
<th>Room Number</th>
<th>Check-in</th>
<th>Check-out</th>
</tr>
<?php
require 'db.inc';
$sql = 'SELECT * FROM reservations';
$results = mysqli_query($conn, $sql);
$no = 1;
while ($row = mysqli_fetch_assoc($results)) {
echo '
<tr>
<td>'. $no .'</td>
<td>' .$row["full_name"].'</td>
<td>' .$row["nationality"].'</td>
<td>' .$row["email"].'</td>
<td>' .$row["phone"].'</td>
<td>' .$row["gender"].'</td>
<td>' .$row["house_number"].'</td>
<td>' .$row["checkin"].'</td>
<td>' .$row["checkout"].'</td>
</tr>
';
$no ++;
}
?>
</table>
