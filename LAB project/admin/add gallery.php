
<?php



session_start();

if (!isset($_SESSION['id']))
{
header("Location:index.php");
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
                        <h4 class="page-title">Add Gallery</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                <form class="form" enctype="multipart/form-data" method="POST">
                

                  <div class="form-group">
                    <label for="password-1">Date</label>
                  <input type="Date" class="form-control" name="date">
                  </div>

                   <div class="form-group">
                    <label for="password-1">Time</label>
                  <input type="Time" class="form-control" name="time">
                  </div>

                   <div class="form-group">
                    <label for="password-1">Title</label>
                  <input type="text" class="form-control" name="title">
                  </div>

                 

                  <div class="form-group">
                    <label for="password-1">Upload Image</label>
                    <input type="file" class="form-control" name="image">
                  </div>


                  
                  <div class="form-group">
                    <button class="btn  btn-block" type="submit" name="submit" style="background-color: #0093d9;color: white">Submit</button>
                  </div>
                </form>

              <?php
                include 'connection.php';

if(isset($_POST['submit']))
{
                  $image=$_FILES['image']['name'];
                  $path="images/".$image;
                  move_uploaded_file($_FILES['image']['tmp_name'],$path);
                  $title=$_POST['title'];
                  $date=$_POST['date'];
                  $time=$_POST['time'];
                 


                if ($image=="")
                   {
                    echo " image field is empty"; 
                  }


                 else if ($title=="")
                   {
                    echo "title field is empty";
                  }


                 else if ($date=="")
                   {
                    echo "date field is empty";
                  }

                  else if ($time=="")
                   {
                    echo "time field is empty";
                  }




                 
                  else{

                  $query="INSERT INTO `add_gallery`(`Date`,`Time`,`Title`,`Image`) VALUES ('$date','$time','$title','$path')";
                  
                  $result=mysqli_query($connect,$query);
                  if (!$result) {
                    echo "Data Not Inserted";
                  }
                  else
                  {
                    echo "Data Inserted";
                  }

                }

                  }
                ?>

              </div>
            </div></div></div></div>
        
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
