<!DOCTYPE html>
<html lang="en">
<?php include_once('include/head.php');?>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <?php include_once('include/header.php');?>
      <!--header end-->

      <!--sidebar start-->
<?php include_once('include/sidebar.php');?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-table"></i>Table</li>
						<li><i class="fa fa-th-list"></i>Basic Table</li>
					</ol>
				</div>
			</div>
              <!-- page start-->

                          <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Attendance <?php echo "Today is : ". date('l jS \of F Y h:i:s A');?>

                            <?php
                            $sql = "SELECT * FROM classes";
                              $result = $conn->query($sql);?>
                              <select id="<?php echo $row['class_name'];?>" class="classes" onchange="getval(this);" >
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <option value="<?php echo $row['class_name'];?>"><?php echo $row['class_name']; ?></option>

                                  <?php } ?></select>
                          </header>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Roll No</th>
                                  <th>Full Name</th>
                                  <th>Monday</th>
                                  <th>Tuesday</th>
                                  <th>Wednesday</th>
                                  <th>Thursday</th>
                                  <th>Friday</th>
                                  <th>Saturday</th>
                                </tr>
                              </thead>
                              <tbody>

                                <tr>
                                  <?php
                                  $day = date("l");
                                  error_reporting(0);
                                  $sql = "SELECT roll_no, first_name, second_name FROM user";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                    ?>
                                    <form class="" action="attend.php" id="register_form" method="post">
                                  <td><?php $rollno=$row["roll_no"]; echo $rollno; ?></td>
                                  <td ><?php echo $row["first_name"]." ". $row[second_name]; ?></td>
                                  <td><input  type="checkbox" day="Monday" class="atnd" id="<?php echo $rollno; ?>" value="1" name="attendance" ></td>
                                  <td><input  type="checkbox" day="Tuesday" class="atnd" id="<?php echo $rollno; ?>" value="1" name="attendance" ></td>
                                  <td><input  type="checkbox" day="Wednesday" class="atnd" id="<?php echo $rollno; ?>" value="1" name="attendance" ></td>
                                  <td><input  type="checkbox" day="Thursday" class="atnd" id="<?php echo $rollno; ?>" value="1" name="attendance" ></td>
                                  <td><input  type="checkbox" day="Friday" class="atnd" id="<?php echo $rollno; ?> "value="1" name="attendance" ></td>
                                  <td><input  type="checkbox" day="Saturday" class="atnd" id="<?php echo $rollno; ?>" value="1" name="attendance" ></td>

                                  </form>
                                </tr>
                                <?php      }
                                    }
                                     else {
                                      echo "0 results";
                                    } ?>
                              </tbody>
                            </table>
                          </div>

                      </section>
                  </div>
              </div>


              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <script type="text/javascript">
  //  var attend = document.getElementsByClassName(atnd);

$(document).ready(function(){
  $(".atnd").click(function(){
    var attend = $(this).attr('value');
    var rollno = $(this).attr('id');
    var day = $(this).attr('day');
    var state = $(this).is(':checked');
      $.ajax({
        url: "attend.php?attend="+attend+"&rollno="+rollno+"&day="+day+"&state="+state,
        success: function(result){
      }});
  });
});

    </script>

    <script type="text/javascript">
    $(document).ready(function(){
      $(".classes").click(function(){
       classname = $(this).attr('value');
          $.ajax({
            url: "showclassatnd.php?showclassatnd="+classes+"&classname="+classname,
            success: function(result){
          }});

        });
      });

    </script>

  </body>
</html>
