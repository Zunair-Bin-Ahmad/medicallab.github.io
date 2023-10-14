<?php
include "connection.php";
$search=$_POST['search'];
$query="SELECT * FROM `add_report` WHERE category='$search'";
$run=mysqli_query($connect,$query);
if (mysqli_num_rows($run)>0) {
while($row = mysqli_fetch_array($run)){
$ptname=$row['ptname'];

$labno=$row['labno'];
$report=$row['image'];
?>
<h1><?php echo $ptname ?></h1>
<h1><?php echo $labno ?></h1>
<h1><?php echo $image ?></h1>

<?php }
}
?>