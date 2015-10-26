
<!DOCTYPE html>
<html lang="en">
<?php include_once('connect/db.php'); ?>
<?php include_once('include/head.php'); ?>
<script type="text/javascript">
function submitform()
{
    document.forms["myform"].submit();
}

</script>
  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <?php include_once('include/header.php'); ?>
      <!--header end-->

      <!--sidebar start-->
      <?php include_once('include/sidebar.php'); ?>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Student Information </h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Add</li>
						<li><i class="fa fa-files-o"></i>Student</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             New Student
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal " id="" method="post" action="insert.php">
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">First Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="firstname" name="firstname" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="secondname" class="control-label col-lg-2">Second Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="secondname" name="secondname" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">lastname <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="lastname" name="lastname" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="fathername" class="control-label col-lg-2">Father Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="fathername" name="fathername" type="text" />
                                          </div>
                                      </div>



                                        <div class="form-group ">
                                          <label for="classname" class="control-label col-lg-2">Class <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                            <?php
                                            $sql = "SELECT * FROM classes";
                                              $result = $conn->query($sql);?>
                                              <select class="form-control input-lg m-bot15" name="classname" id="<?php echo $row['class_name'];?>"  onchange="getval(this);" >
                                            <?php while ($row = $result->fetch_assoc()) { ?>
                                                <option value="<?php echo $row['class_name'];?>"><?php echo $row['class_name']; ?></option>

                                                  <?php } ?></select>
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="section" class="control-label col-lg-2">Section <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="section" name="section" type="text" />
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="gender" class="control-label col-lg-2">Gender <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select class="form-control input-lg m-bot15" name="gender">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </li>
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="rollno" class="control-label col-lg-2">Roll No <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="rollno" name="rollno" type="text" />
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="mob1" class="control-label col-lg-2">Mobile No <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="mob1" name="mob1" type="text" />
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="mob2" class="control-label col-lg-2">Other Mobile No <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="mob2" name="mob2" type="text" />
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Address <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="address" name="address" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="email" type="email" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username <span class="required">*</span></label>
                                          <div class="col-lg-10">

                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password <span class="required">*</span></label>
                                          <div class="col-lg-10">

                                          </div>
                                      </div>


                                      <div class="form-group ">
                                          <label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy <span class="required">*</span></label>
                                          <div class="col-lg-10 col-sm-9">
                                              <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input type="submit"  value="submit"  name="submit">
                                              <button class="btn btn-primary" type="submit" >Save</button>
                                              <button class="btn btn-default" type="reset">reset</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
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
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
