<?php
include_once('connect/db.php');
error_reporting(0);
$status = $_GET[state];
if ($status == 'true') {
  $status = 1;
}
else {
  $status = 0;
}
$date = date('Y-m-d');
$day = $_GET[day];
$rollno = $_GET[rollno];
$sql = "SELECT roll_no FROM attendance where day = '$day' AND  roll_no = '$rollno'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     $sql1 = "UPDATE attendance SET `statu  s`='$status', `_date`='$date' where `_date`= '$date'";
   }
else {
  $sql1 = "INSERT INTO attendance (`roll_no`,`day`,`_date`,`status`)
  VALUES ('$rollno','$day',now(),'$status')";
}
$conn->query($sql1);
$conn->close();
?>
