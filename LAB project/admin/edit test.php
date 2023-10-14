
<?php



session_start();

if (!isset($_SESSION['id'])) 
{
header("Location:index.php");
}

 ?>




<?php
 include("connection.php");
?>
<?php
$msg='';
$id=$_GET['id'];
if (isset($_POST['submit'])) {
  include("connection.php");
  $name=$_POST['name'];
                 $price=$_POST['price'];
                  $date=$_POST['date'];
                  $time=$_POST['time'];
                 
  

     $query="UPDATE `add_test` SET `Name`='$name',`Price`='$price',`Date`='$date',`Time`='$time' WHERE id='$id'";
    $run=mysqli_query($connect,$query);
    if (!$run) {
      echo "<script>alert('Data Not Inserted')</script>";
    }
    else{
      $msg=1;
       header("Location:View test.php");
    }
  
 
}

?>






    <!DOCTYPE html>
<html lang="en">


<!-- add-appointment24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>MedicLab Diagnostic Admin panel</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
   
    <div class="main-wrapper">
        <?php include('include/TOPBAR.php'); ?>
       <?php include('include/SIDEBAR.php'); ?> 

     
        <div class="page-wrapper"> 
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2"> 
                        <h4 class="page-title">Add TEST</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">

                        <?php 
                      $query="SELECT *from `add_test` WHERE id=$id";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                          
                      ?>

                      <form class="form" method="POST"  enctype="multipart/form-data">
                
<div class="form-group">
                    <label for="password-1">Test Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $row['Name'] ?>">
                  </div>


                  <div class="form-group">
                    <label for="password-1">Price</label>
                  <input type="number" class="form-control" name="price" value="<?php echo $row['Price'] ?>">
                  </div>


                  
                  <div class="form-group">
                    <label for="password-1">Date</label>
                  <input type="Date" class="form-control" name="date" value="<?php echo $row['Date'] ?>">
                  </div>

                   <div class="form-group">
                    <label for="password-1">Time</label>
                  <input type="Time" class="form-control" name="time" value="<?php echo $row['Time'] ?>">
                  </div>
     







             


                  <div class="form-group">
                    <button class="btn  btn-block" type="submit" name="submit" style="background-color: #0093d9; color: white;margin-top: 20px">Submit</button>
                  </div>
                </form>

 
                      <?php

                         }
                      }
                       ?>
              </div>
            </div>
          </div>
         
        </div>
      </div>
        
                    </div>
                </div>
            </div>
			</div></div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
	<script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'

                });
            });
     </script>
</body>


<!-- add-appointment24:07-->
</html>
