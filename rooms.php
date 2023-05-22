<?php
require_once 'db.inc';
$query = "SELECT * FROM rooms WHERE reserved = 0";
$get_rooms = mysqli_query($conn, $query);
echo '
    <script type="text/javascript">
    function unreservedRooms(){
        const room_number = document.getElementById("room-number");
        ';
        $rooms = 1;
        while ($row = mysqli_fetch_assoc($get_rooms)) {
            $room_number = $row['room_number'];
            echo '
            const option' . $rooms . ' = document.createElement("option");
        //    var room_no = "' . $room_number . '";
            option' . $rooms . '.value = "' . $room_number . '";
            option' . $rooms . '.textContent = "' . $room_number . '";
            room_number.appendChild(option' . $rooms . ');
            ';
            $rooms += 1;
        }
echo '}</script>';
?>
