
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
                        <h4 class="page-title">Add Contact</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    <form class="form" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="email-1">Contact Name</label>
                    <input id="email-1" class="form-control" type="text" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email-1">Number</label>
                    <input id="email-1" class="form-control" type="Number" name="Number">
                  </div>

                  <div class="form-group">
                    <label for="email-1">Email</label>
                    <input id="email-1" class="form-control" type="email" name="email">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Date</label>
                  <input type="Date" class="form-control" name="date">
                  </div>

                   <div class="form-group">
                    <label for="password-1">Time</label>
                  <input type="Time" class="form-control" name="time">
                  </div>


                   
               


                  <div class="form-group">
                    <label for="password-1">Social links</label><br>
                    <input type="text" class="form-control" name="facebook" placeholder="facebook account">
                    <input type="text" class="form-control" name="twitter" placeholder="twitter account">
                    <input type="text" class="form-control" name="instagram" placeholder="instagram account">
                  </div>



                  
                  <div class="form-group">
                    <button class="btn  btn-block" type="submit" style="background-color: #0093d9;color: white;" name="submit">Submit</button>
                  </div>

                 
         
                </form>
              
                              <?php
                include 'connection.php';
                if(isset($_POST['submit'])){
                  $name=$_POST['name'];
                  $Number=$_POST['Number'];
                  $email=$_POST['email'];
                  $date=$_POST['date'];
                  $time=$_POST['time'];
                  $facebook=$_POST['facebook'];
                  $twitter=$_POST['twitter'];
                  $instagram=$_POST['instagram'];
                  $imagepath="images/".$_FILES['simage']['name'];
    move_uploaded_file($_FILES['simage']['tmp_name'],$imagepath);


                  if($name=="")
                  {
                    echo "name field is empty";
                  }

                else if ($Number=="")
                   {
                    echo " number field is empty";
                  }

                 else if ($email=="")
                   {
                    echo " email field is empty";
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

                  $query="INSERT INTO `add_contact`(`Name`, `Number`, `Email`, `Date`, `Time`, `Facebook`, `Twitter`, `Instagram`,`Image`) VALUES ('$name','$Number',
                  '$email','$date','$time','$facebook','$twitter','$instagram','$imagepath')";
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
