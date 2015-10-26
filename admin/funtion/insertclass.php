<?php
include_once('../connect/db.php');
error_reporting(0);
$sql = "INSERT INTO class (class_name,class_code)
VALUES ('$_POST[classname]','$_POST[classcode]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
