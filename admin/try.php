<?php include_once('connect/db.php');

error_reporting(0);
$day = "Wednesday";
$sql = "SELECT day,date FROM attendance where day = '$day' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $sql1 = "UPDATE attendance SET `roll_no` = 145,`day`='Sunday',`date`= '',`status`=0";
     if ($conn->query($sql1) === TRUE) {
       echo "New record created successfully";
     } else {
       echo "Error: " . $sql1 . "<br>" . $conn->error;
     }
    }
} else {
  echo "data not found data ";

  //$sql1 = "INSERT INTO attendance (`roll_no`,`day`,`date`,`status`)
  //VALUES ('12','Tuesday',now(),'0')";
}
$conn->close();
?>
