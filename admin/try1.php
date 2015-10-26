<?php include_once('connect/db.php');

error_reporting(0);
$day = "Monday";
$sql = "SELECT day,_date,roll_no,status FROM attendance where day = '$day' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $sql1 = "UPDATE attendance SET `roll_no` = 145,`day`='Friday',`status`=0";
     if ($conn->query($sql1) === TRUE) {
       echo "New record created successfully";
     } else {
       echo "Error: " . $sql1 . "<br>" . $conn->error;
     }
    }
}
else {
echo "No result found";
}

$conn->close();
?>
