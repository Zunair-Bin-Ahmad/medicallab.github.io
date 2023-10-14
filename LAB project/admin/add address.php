
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
                        <h4 class="page-title">Add Address</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                <form class="form" method="POST">
                

                  <div class="form-group">
                    <label for="password-1">Date</label>
                  <input type="Date" class="form-control" name="date">
                  </div>

                   <div class="form-group">
                    <label for="password-1">Time</label>
                  <input type="Time" class="form-control" name="time">
                  </div>

                   <div class="form-group">
                    <label for="password-1">Address</label>
                  <input type="text" class="form-control" name="address">
                  </div>


                  <div class="form-group">
                    <label for="password-1">Email 1</label>
                  <input type="email" class="form-control" name="email1">
                  </div>


                  <div class="form-group">
                    <label for="password-1">Email 2</label>
                  <input type="email" class="form-control" name="email2">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Phone no 1</label>
                  <input type="number" class="form-control" name="phoneno1">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Phone no 2</label>
                  <input type="number" class="form-control" name="phoneno2">
                  </div>

                

                  
                  <div class="form-group">
                    <button class="btn  btn-block" type="submit" name="submit" style="background-color: #0093d9;color: white">Submit</button>
                  </div>
                </form>

              <?php
                include 'connection.php';

if(isset($_POST['submit']))
{
                  
                  
                  $date=$_POST['date'];
                  $time=$_POST['time'];
                  $address=$_POST['address'];
                  $email1=$_POST['email1'];
                  $email2=$_POST['email2'];
                  $phoneno1=$_POST['phoneno1'];
                  $phoneno2=$_POST['phoneno2'];
                 


                if ($date=="")
                   {
                    echo " date field is empty";
                  }

                  else if ($time=="")
                   {
                    echo "time field is empty";
                  }

                  else if ($address=="")
                   {
                    echo "address field is empty";
                  }
                  else if ($email1=="")
                   {
                    echo "email1 field is empty";
                  }

                  else if ($email2=="")
                   {
                    echo "email2 field is empty";
                  }

                  else if ($phoneno1=="")
                   {
                    echo "phoneno1 field is empty";
                  }

                  else if ($phoneno2=="")
                   {
                    echo "phoneno2 field is empty";
                  }









                 
                  else{

                  $query="INSERT INTO `add_address`(`Date`,`Time`,`Address`,`Email1`,`Email2`,`Phoneno1`,`Phoneno2`) VALUES ('$date','$time','$address','$email1','$email2','$phoneno1','$phoneno2')";
                  
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
