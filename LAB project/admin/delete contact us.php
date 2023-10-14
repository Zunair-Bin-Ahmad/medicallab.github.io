<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM `contact_us` WHERE  id=$id";
$run=mysqli_query($connect,$query);
if (!$run) {
	echo "Data Not deleted";
}
else{
	header("Location:../Admin view contact us.php?msg=1");
}

?>