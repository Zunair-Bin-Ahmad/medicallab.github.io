

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

                  $date=$_POST['date'];
                  $time=$_POST['time'];
                 $imagepath=$_FILES['image']['name'];
  if ($imagepath=='') {
     $query="UPDATE `add_slider` SET `Date`='$date',`Time`='$time',`Image`='$image' WHERE id='$id'";
    $run=mysqli_query($connect,$query);
    if (!$run) {
      echo "<script>alert('Data Not Inserted')</script>";
    }
    else{
      $msg=1;
       header("Location:view slider.php");
    }
  }
  else{
  $imagepath="images/".$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$imagepath);
    $query="UPDATE `add_slider` SET `Date`='$date',`Time`='$time',`Image`='$imagepath' WHERE id='$id'";
    $run=mysqli_query($connect,$query);
    if (!$run) {
      echo "<script>alert('Data Not Inserted')</script>";
    }
    else{
      $msg=1;
      header("Location:view slider.php");
    }
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
                        <h4 class="page-title">Edit Slider</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                       <?php 
                      $query="SELECT *from `add_slider` WHERE id=$id";;
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {

                         
                      ?>
                    <form class="form" method="POST" enctype="multipart/form-data">
                 

                  <div class="form-group">
                    <label for="password-1">Date</label>
                  <input type="Date" class="form-control" name="date" value="<?php echo $row['Date'] ?>">
                  </div>

                   <div class="form-group">
                    <label for="password-1">Time</label>
                  <input type="Time" class="form-control" name="time" value="<?php echo $row['Time'] ?>">
                  </div>


                   

                  <div class="form-group">
                    <label for="password-1">Image</label>
                  <input type="file" class="form-control" name="image" value="<?php echo $row['Image'] ?>">
                  </div>



                  
                  <div class="form-group">
                    <button class="btn  btn-block" type="submit" style="background-color: #0093d9;color: white;" name="submit">Submit</button>
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
