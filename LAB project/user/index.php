
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
    <title>Mediclab Diagnostic</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="assets/img/alkhidmat logo 1.png">
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




<script src="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    





          
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>








     <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script> $('table').table_scroll();</script>

    <![endif]-->

    	<style>
        .scrollable
        {

height: 300px;
overflow: scroll;
overflow-x: hidden;
        }
       

    </style>

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->
	
	<!-- Start top bar -->
	<?php
	include("topbar.php");
	?>
	<!-- End top bar -->
	
	<!-- Start header -->
	<?php
	include("header.php");
	?>
	<!-- End header -->
	
	<!-- Start Banner -->
	<?php
	include("banner.php");
	?>
	<!-- End Banner -->
	
	<!-- Start About us -->
<?php
	include("start aboutus.php");
	?>
	<!-- End About us -->
	<?php
	include("start team.php");

?>
	<!-- Start Services -->



	<?php
	include("service.php");

?>
	<!-- End Services -->
	
	<!-- Start Appointment -->
	<?php
	include("registration.php");

?>
	<!-- End Appointment -->
	
	<!-- Start Gallery -->
	<?php
	include("gallery.php");

?>
	<!-- End Gallery -->
	
	<!-- Start Team -->
		
	
	<!-- End Team -->
	<?php
	include("view tests.php");

?>
	<!-- Start Blog -->
<?php
	include("tests.php");

?>
	<!-- End Blog -->
	
<?php
	include("view privacy policy.php");

?>

	<!-- Start Contact -->
	<?php
	include("contactus.php");

?>
	<!-- End Contact -->
	
	<!-- Start Subscribe -->
	
	<!-- End Subscribe -->
	

	<?php
	include("Address.php");

?>
	<!-- Start Footer -->
		<?php
	include("footer.php");

?>
	<!-- End Footer -->
	
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
