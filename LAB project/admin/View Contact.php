


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
                <?php $msg='';
if (isset($_GET['msg'])) {
  $msg=$_GET['msg'];
}
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
               
                    
                        <h4 class="page-title">View Contact</h4>
                   
                    
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                 
                        <thead>
                         <tr>
                          <th><center>id</center></th>
                          <th><center>Name</center></th>
                          <th><center>Number</center></th>
                          <th><center>Email</center></th>
                          <th><center>facebook</center></th>
                         <th><center>Twitter</center></th>
                         <th><center>Instagram</center></th>
                          <th><center>DATE</center></th>
                         <th><center>TIME</center></th>
                         

                         <th><center>Action</center></th>
                           
                        </tr>
                      </thead>
                      
                      <tbody >
                      <?php 
                      $query="SELECT *from `add_contact` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {

                          $id=$row['id'];
                          $name=$row['Name'];
                            $email=$row['Email'];
                            $Number=$row['Number'];
                            $facebook=$row['Facebook'];
                            $twitter=$row['Twitter'];
                            $instagram=$row['Instagram'];
                            $date=$row['Date'];
                            $time=$row['Time'];
                            
                            
                            
                          
                            
                       
                      ?>
                      <tr>
                        <td><?php echo "$id"; ?></td>
                        <td><?php echo "$name"; ?></td>
                        <td><?php echo "$Number"; ?></td>

                        <td><?php echo "$email"; ?></td>
                                                <td><?php echo "$facebook"; ?></td>
                        <td><?php echo "$twitter"; ?></td>
                        <td><?php echo "$instagram"; ?></td>
                          <td><?php echo "$date"; ?></td>
                        <td><?php echo "$time"; ?></td>
                        

                        <td><center><a href="edit contact.php?id=<?php  echo $id ?>"><input type="submit" class="btn btn-success btn-sm" value="Edit" name=""></a>
                          <a href="delete contact.php?id=<?php echo $id ?>"><input type="submit" class="btn btn-danger btn-sm" value="Delete" name=""></a></center></td>
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
             <?php
            if ($msg=='') {
                    
                  }
                  else{
                      echo "<div class='alert alert-success'>Data Deleted <b>Successfully</b></div>";
                  }  
                   ?>
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