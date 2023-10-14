

<?php
                include 'connection.php';
                ?>
                <?php $msg='';
if (isset($_GET['msg'])) {
  $msg=$_GET['msg'];
}
?>

<div class="col-lg-12">
                    <div class="title-box" id="appointment">
                    
                        <h2>View Reports</h2>


                        <center><form class="col-lg-4" method="POST" action="#qq">

                           <div class="form-group" id="qq">

                    <label for="password-1">Patient Name</label>
                    <input type="text" class="form-control" name="ptname">
                  </div>

                   <div class="form-group">

                    <label for="password-1">Lab No</label>
                    <input type="text" class="form-control" name="labno">
                  </div>

                  <div class="form-group">
                    <button class="btn  btn-block" type="submit" name="submit" style="background-color: #12557f;color: white">Submit</button>
                  </div>

                        </form></center>

                   
                    
                
              <div class="row mt-5">
                    <div class="col-md-12">
                    
                            <table class="table table-striped scrolldown" >


                             
                                 
                         <thead  >
                         <tr>
                          
                          <th><center>PatientName</center></th>
                          <th><center>Lab NO</center></th>
                          
                          <th><center>Download Report</center></th>
                          
                           
                        </tr>
                      </thead>
                      
                      <tbody >                
             <?php
include "connection.php";
if (isset($_POST['submit'])) {

$ptname=$_POST['ptname'];
              $labno=$_POST['labno'];

$query="SELECT * FROM `add_report` WHERE ptname='".$ptname."' and labno='".$labno."'";
$run=mysqli_query($connect,$query);
if (mysqli_num_rows($run)>0) {
while($row = mysqli_fetch_array($run)){
 $ptname=$row['Ptname'];
  $labno=$row['Labno'];                         

                            
  $image=$row['Image'];
?>
                      <tr >

                        <td ><center><?php echo $ptname; ?></center></td>
                        <td ><center><?php echo $labno; ?></center></td>
                          
                       <td ><center><a href="../Admin/<?php echo $row['Image']  ?>">Download</a></center></td>
                        



                         
                        
                        
                      </tr>  <?php }
}else{echo "<div class='alert alert-success'> <b>Invalid details</b></div>";}

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