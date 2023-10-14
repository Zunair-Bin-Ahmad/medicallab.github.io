

<?php
                include 'connection.php';
                ?>
                <?php $msg='';
if (isset($_GET['msg'])) {
  $msg=$_GET['msg'];
}
?>

<div class="col-lg-12">
                    <div class="title-box" id="zzzz">
                    
                        <h2 id="aaa">View Tests</h2>


                        <form class="col-lg-4" method="POST" action="#aaa" >

                          <input type="text" name="search" placeholder="search" id="myInput">
                        </form>




                   
                    
                
                <div class="row mt-5">
                    <div class="col-md-12">
                      <div class="scrollable">

                      <table width="100%">
            
                          <thead>
                            <tr>
                              <th style="background: #0d59a7;color: white;font-size: 20px;">
                                <center>Test Name</center></th>

                          <th class=" pr-3" style="position: sticky;
          top: 0;font-size: 20px;
          background: #0d59a7;
          color: white;
          z-index: 0;"><center><span style="color: transparent;">....</span>Price</center></th>
                          
                          <th class="pr-3" style="position: sticky;
          top: 0;font-size: 20px;
          background: #0d59a7;
          color: white;
          z-index: 0;"><center>Report Time</center></th>
                            </tr>
                          </thead>
                        
                      </table>
                    
                            <table class="table table-striped" id="myTable"   >


                          
                                 
                         <thead >
                         <tr >
                          
                          <th style="position: sticky;
          top: 0;
          background: white;
          color: white;
          z-index: 0;"><center>Test Name</center></th>

                          <th style="position: sticky;
          top: 0;
          background: white;
          color: white;
          z-index: 0;"><center>Price</center></th>
                          
                          <th style="position: sticky;
          top: 0;
          background: white;
          color: white;
          z-index: 0;"><center>Report Time</center></th>
                          
                           
                        </tr>
                      </thead>
                      
                      <tbody >                
             <?php
include "connection.php";
if (isset($_POST['submit'])) {

$search=$_POST['search'];
$query="SELECT * FROM `add_test` WHERE name='$search'";
$run=mysqli_query($connect,$query);
if (mysqli_num_rows($run)>0) {
while($row = mysqli_fetch_array($run)){
 $name1=$row['Name'];
  $price1=$row['Price'];                         

                            
  $time1=$row['Time'];
?>
                      <tr >
                          
                       <td><center><?php echo $name1; ?></center></td>
                        <td><center><?php echo $price1; ?></center></td>
                        
                        <td><center><?php echo $time1; ?></center></td>



                         
                        
                        
                      </tr>  <?php }
}
}
?>
  


                      <?php 
                      $query="SELECT *from `add_test` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                          $id=$row['id'];
                           $name=$row['Name'];
                           $price=$row['Price'];                         
                            
                           $time=$row['Time'];
                           
                           // $terms=$row['Terms'];
                 
                      ?> 

<tr>
                          
                       <td><center><?php echo $name; ?></center></td>
                        <td><center><?php echo $price; ?></center></td>
                        
                        <td><center><?php echo $time; ?></center></td>



                         
                        
                        
                      </tr>
     


                      <?php

                         }
                      }
                       ?>

                     

                     </tbody>
                   </div>
                            </table>
                          </div>
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