
<?php



session_start();

if (!isset($_SESSION['id'])) 
{
header("Location:index.php");
}

 ?>

<?php
include 'connection.php';
if(isset($_POST['signup'])){

    $name=$_POST['name'];
                  $email=$_POST['email'];
                  $password=md5($_POST['password']);
                  


                  

                  $query="INSERT INTO `login`(`email`, `password` ,`name`) VALUES ('$email','$password','$name')";
                 
                  $result=mysqli_query($connect,$query);
                  if (!$result) {
                    echo "Data Not Inserted";
                  }
                  else
                  {
                    header("Location:index.php?msg=1");
                  }

                  

                  }
                ?>


?>