
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
                  
                 $question=$_POST['question'];
                  $answer=$_POST['answer'];
                  $description=$_POST['description'];
                  $select=$_POST['select'];
                  $date=$_POST['date'];
                 
  

     $query="UPDATE `add_faq,s` SET `Question`='$question',`Answer`='$answer',`Description`='$description',`Select`='$select',`Date`='$date' WHERE id='$id'";
    $run=mysqli_query($connect,$query);
    if (!$run) {
      echo "<script>alert('Data Not Inserted')</script>";
    }
    else{
      $msg=1;
       header("Location:View FAQ,s.php");
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
                        <h4 class="page-title">Add Terms & Conditions</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">

                        <?php 
                      $query="SELECT *from `add_faq,s` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {

                      ?>
                      <form class="form" method="POST" enctype="multipart/form-data">
                
                 <div class="form-group">
                    <label for="password-1">Question</label>
                  <input type="text" class="form-control" name="question" value="<?php echo $row['Question'] ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="password-1">Answer</label>
                  <input type="text" class="form-control" name="answer" value="<?php echo $row['Answer'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Date</label>
                  <input type="Date" class="form-control" name="date" value="<?php echo $row['Date'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Decscription</label>
                  <textarea class="form-control" name="description"><?php echo $row['Description'] ?></textarea>
                  </div>


                     <div class="form-group">
                    <label for="password-1">Select</label>
                  <select class="form-control" name="select" value="<?php echo $row['Select'] ?>" >
                  <option class="form-control" >[Frequently Asked Questions]</option>
                  <option class="form-control" >Can I get my own email with my website?</option>
                  <option class="form-control" >How will people find my website?</option>
                  <option class="form-control" >Can I have a shopping cart?</option>
                  <option class="form-control" >Can I see how many visitors go to my website?/option>
                  <option class="form-control" >How do I make money with my website?</option>
                   </select> 
                  </div>



                 
 
                  <div class="form-group">
                    <button class="btn  btn-block" type="submit" name="submit" style="background-color: #0093d9;color: white;margin-top: 20px">Submit</button>
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
