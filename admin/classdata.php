
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
                                  <form class="form-validate form-horizontal " id="register_form" method="post" action="function/insertclass.php">
                                      <div class="form-group ">
                                          <label for="classname" class="control-label col-lg-2">Class Name: <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="classname" name="classname" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="class code" class="control-label col-lg-2">Class Code <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="classcode" name="classcode" type="text" />
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
