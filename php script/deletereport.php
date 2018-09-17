<?php

$DB_HOST = "localhost";
$DB_NAME = "iot-fms";
$DB_USER = "root";
$DB_PASS = "";

$con = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if($con->connect_errno > 0) {
  die('Connection failed [' . $con->connect_error . ']');
} else {
  header("Location:../viewhistoryreports.php");
}
$room_reports_id = (int)$_GET['room_reports_id'];

$update = $con->prepare("DELETE FROM room_reports WHERE `room_reports`.`room_reports_id` = ?");
$update->bind_param('i', $room_reports_id);
$update->execute();
$update->close();

?> 
