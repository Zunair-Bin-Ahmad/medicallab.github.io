

<?php



session_start();

if (!isset($_SESSION['id'])) 
{
header("Location:index.php");
}

 ?>

<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM `add_slider` WHERE  id=$id";
$run=mysqli_query($connect,$query);
if (!$run) {
	echo "Data Not deleted";
}
else{
	header("Location:view slider.php?msg=1");
}

?>