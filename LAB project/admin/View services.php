


<?php



session_start();

if (!isset($_SESSION['id'])) 
{
header("Location:index.php");
}

 ?>


<?php
                include 'connection.php';
                ?>

<!DOCTYPE html>
<html lang="en">


<!-- leave-type24:06-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/alkhidmat logo 1.png">
    <title>Alkhidmat Lab Admin panel</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
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
               
                    
                        <h4 class="page-title">View Services</h4>
                   
                    
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                 <thead >
                        <tr>
                          <th><center>Id</center></th>
                          <th><center>SERVICES NAME</center></th>
                          <th><center>SERVICES CATAGORY</center></th>
                          <th><center>DATE</center></th>
                          
                          <th class="text-right"><center>TIME</center></th>
                        
                          <th><center>DESCRIPTION</center></th>

                            <th><center>SERVICES TYPE</center></th>
                         
                          
                           <th class="text-right"><center>Action</center></th>
                           
                        </tr>
                      </thead>
                      
                      <tbody >
                      <?php 
                      $query="SELECT *from `add_services` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                           $id=$row['id']; 
                          $service_name=$row['Name'];
                  $catagory=$row['Catagory'];
                  $date=$row['Date'];
                  $time=$row['Time'];
                  
                  $description=$row['Description'];
                  $type=$row['Type'];
                 
                  
                       
                      ?>
                      <tr>
                        <td><center><?php echo "$id"; ?></center></td>
                        <td><center><?php echo "$service_name"; ?></center></td>
                        <td><center><?php echo "$catagory"; ?></center></td>
                        <td><center><?php echo "$date"; ?></center></td>
                    
                        <td><center><?php echo "$time"; ?></center></td>
                    
                          <td><center><?php echo "$description"; ?></center></td>
                           <td><center><?php echo "$type"; ?></center></td>
                       
                        
                        
                        <td><center><a href="edit services.php?id=<?php  echo $id ?>"><input type="submit" class="btn btn-success btn-sm" value="Edit" name=""></a>
                          <a href="delete services.php?id=<?php  echo $id ?>"><input type="submit" class="btn btn-danger btn-sm" value="Delete" name=""></td></a></center></td>
                      </tr>
                      <?php

                         }
                      }
                       ?>
                     </tbody>
                 
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div></div>
		
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- leave-type24:06-->
</html>