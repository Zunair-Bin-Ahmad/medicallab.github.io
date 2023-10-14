
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
                        <h4 class="page-title">Add Terms & Conditions</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                      <form class="form" method="POST" enctype="multipart/form-data">
                
                 <div class="form-group">
                    <label for="password-1">Question</label>
                  <input type="text" class="form-control" name="question">
                  </div>
                  
                  <div class="form-group">
                    <label for="password-1">Answer</label>
                  <input type="text" class="form-control" name="answer">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Date</label>
                  <input type="Date" class="form-control" name="date">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Decscription</label>
                  <textarea class="form-control" name="description"></textarea>
                  </div>


                     <div class="form-group">
                    <label for="password-1">Select</label>
                  <select class="form-control" name="select" >
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
                include 'connection.php';

if (isset($_POST['submit'])){
                  $question=$_POST['question'];
                  $answer=$_POST['answer'];
                  $description=$_POST['description'];
                  $select=$_POST['select'];
                  $date=$_POST['date'];
                  $imagepath="images/".$_FILES['simage']['name'];
    move_uploaded_file($_FILES['simage']['tmp_name'],$imagepath);


                   if ($question=="")
                  {
                    echo "question field is empty";
                  }

                else if ($answer=="")
                   {
                    echo " answer field is empty";
                  }

                 else if ($description=="")
                   {
                    echo " description field is empty";
                  }

                 else if ($select=="") 
                   {
                    echo "select field is empty";
                  }

                  else if ($date=="")
                   {
                    echo "date field is empty";
                  }

                 



                  else{

                  $query="INSERT INTO `add_faq,s`(`Question`, `Answer`, `Date`, `Description`, `Select`,`Image`) VALUES ('$question','$answer','$date','$description','$select','$imagepath')";

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
