


<?php
 include("connection.php");
?>

<?php
$msg='';
$id=$_GET['id'];
if (isset($_POST['submit'])) {
  include("connection.php");
 
                  
                  $name=$_POST['name'];
                  $number=$_POST['number'];
                  $address=$_POST['address'];
                  $test=$_POST['test'];
                 
  

     $query="UPDATE `register` SET `Name`='$name',`Phone`='$number',`Address`='$address',`Tests`='$test' WHERE id='$id'";
    $run=mysqli_query($connect,$query);
    if (!$run) {
      echo "<script>alert('Data Not Inserted')</script>";
    }
    else{
      $msg=1;
       header("Location:../Admin/View register.php");
    }
  
 
}

?>





<!DOCTYPE html><?php
    include("connection.php");
?>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
     <title>MedicLab Diagnostic Admin panel</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">



<div id="appointment" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Registration Form</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Resgistration</h2>
                        </div>
                        <form method="POST">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Phone Number</label>
                                        <input id="email" name="number" type="number" placeholder="Ph.." class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                               <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Address</label>
                                        <input id="email" name="address" type="text" placeholder="Address" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Tests</label>
                                        <input id="email" name="test" type="text" placeholder="Tests" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="new-btn-d br-2">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                         <?php 
                      $query="SELECT * from `Register` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                            $id=$row['id'];
                  
                          $name=$row['Name'];
                          $number=$row['Phone'];
                  $address=$row['Address'];
                  $tests=$row['Tests'];
                 
                 
                       
                      ?>

                       <?php

                         }
                      }
                       ?>
                        <!-- form end -->
                    </div>
				</div>
				<div class="col-lg-6 col-md-6" style="border: 1px solid lightgreen;">
					
                    </div>
				</div>
			</div>
		</div>
	</div></div></div></div></div>
        


<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>   
    <script src="js/images-loded.min.js"></script>  
    <script src="js/custom.js"></script>
</body>
</html>




        
