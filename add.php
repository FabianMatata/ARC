<?php
require 'db.inc';

for ($rooms = 48; $rooms <= 57; $rooms++) {
    $reserve = 0;
    $sql = "insert into rooms values(?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'ii', $rooms, $reserve);
    mysqli_stmt_execute($stmt);
}
mysqli_close($conn);
mysqli_stmt_close($stmt);