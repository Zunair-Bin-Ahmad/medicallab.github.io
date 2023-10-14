 



<?php
// Turn off error reporting
error_reporting(0);

?>




<div id="booksample" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Book Home Sampling</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="well-block">
                        <div class="well-title">
                            <h1>Fill up fields with details</h1>
                        </div>
                        <form method="POST">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Phone Number</label>
                                        <input id="email" name="number" type="number" placeholder="Ph.." class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                               <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Address</label>
                                        <input id="email" name="address" type="text" placeholder="Address" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Tests</label>
                                        <textarea id="email" name="test" type="text" placeholder="Tests details and instructions" class="form-control input-md"></textarea>
                                        
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="new-btn-d br-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <?php
                 include 'connection.php';

if(isset($_POST['submit']))
{
                  $name=$_POST['name'];
                  $number=$_POST['number'];
                  $address=$_POST['address'];
                  $test=$_POST['test'];
                  
                 

                  if($name=="")
                  {
                    echo "name field is empty";
                  }

                else if ($number=="")
                   {
                    echo " number field is empty";
                  }

                 else if ($address=="")
                   {
                    echo " address field is empty";
                  }

                 else if ($test=="")
                   {
                    echo "test field is empty";
                  }

                  

                 
                  else{

                  $query="INSERT INTO `Register`(`Name`,`Phone`,`Address`,`Tests`) VALUES ('$name','$number','$address','$test')";
                  
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
                        <!-- form end -->
                    </div>
				</div>
				
			</div>
		</div>
	</div></div></div></div></div>

