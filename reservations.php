<!DOCTYPE html>
<html lang="en">
<body>
<?php
require_once 'db.inc';

// $name = $_POST['sir-name'] . $_POST['first-name'];
$name = $_POST['name'];
$nationality = $_POST['nationality'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$check_in = $_POST['checkin'];
$check_out = $_POST['checkout'];
$room_number = $_POST['room'];
$reservation = true;

$mysqlCheckin = date('Y-m-d', strtotime($check_in));
$mysqlCheckout = date('Y-m-d', strtotime($check_out));

$insert_query = "INSERT INTO reservations (full_name, nationality, phone, gender, email, checkin, checkout, house_number) VALUES (?,?,?,?,?,?,?,?)";
$update_query = "UPDATE rooms set reserved = ? WHERE house_number = ?";
$stmt1 = mysqli_prepare($conn, $insert_query);
$stmt2 = mysqli_prepare($conn, $update_query);

mysqli_stmt_bind_param($stmt1, 'ssssssss', $name, $nationality, $phone, $gender, $email, $mysqlCheckin, $mysqlCheckout, $room_number);
mysqli_stmt_bind_param($stmt2, 'is', $reservation, $room_number);

if(mysqli_stmt_execute($stmt1)) {
    echo '<p>room '. $room_number . ' reserved</p>
    <a href="index.php">Back</a>';
    mysqli_stmt_execute($stmt2);
}
mysqli_stmt_close($stmt2);
mysqli_stmt_close($stmt1);
mysqli_close($conn);
?>
</body>
</html>