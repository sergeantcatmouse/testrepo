<?php

require 'connector.php';

if (isset($_POST['submit'])) {
  $value = $_POST['Room_id'];
  $value1 = $_POST['room_reports_type_of_report'];
  $value2 = implode(', ', $_POST['room_reports_name_of_facility']);
  $value3 = $_POST['room_reports_description'];

  $qry=$conn->query("INSERT INTO `room_reports` (`Room_id`, 
  `room_reports_type_of_report`,
  `room_reports_name_of_facility`, 
  `room_reports_description`) VALUES ('$value', '$value1', '$value2', '$value3')");

  if($qry>0) {
    header("Location:../index.php");
  } else {
    echo "<script> alert('Data is not submitted');</script>";
  }
}

mysqli_close($conn);
?> 