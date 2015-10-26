<?php
include_once('../connect/db.php');
$sql = "SELECT * FROM classes";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
  echo $row['class_name'];
}
?>
