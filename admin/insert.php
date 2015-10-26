<?php
include_once('connect/db.php');
error_reporting(0);
$sql = "INSERT INTO user (first_name,second_name,last_name,father_name, class, section, gender, roll_no, mob1, mob2, address)
VALUES ('$_POST[firstname]','$_POST[secondname]','$_POST[lastname]','$_POST[fathername]','$_POST[classname]','$_POST[section]','$_POST[gender]','$_POST[rollno]','$_POST[mob1]','$_POST[mob2]','$_POST[address]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
