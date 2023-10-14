
<?php



session_start();

if (!isset($_SESSION['id'])) 
{
header("Location:index.php");
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <?php 
                      $query="SELECT *from `add_services` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                          $service_name=$row['Name'];
                  $catagory=$row['Catagory'];
                  $date=$row['Date'];
                  $time=$row['Time'];
                  
                  $description=$row['Description'];
                  $type=$row['Type'];
                  
                  
                  
                       
                      ?>
	
<h1>Service Name: <?php echo $service_name; ?></h1>
<h3>Catagory: <?php echo $catagory; ?></h3>
<p>Date: <?php echo $date; ?> </p>
<p>Time: <?php echo $time; ?> </p>

<p>Description: <?php echo $description; ?> </p>
<p>Type: <?php echo $type; ?> </p>
</div>
<?php 
 }
                  }
?>

</body>
</html>