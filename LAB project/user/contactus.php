<!DOCTYPE html>
<html>
<head>
	
	
</head>
<body>
	<div id="contac" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Contact us</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-lg-12 col-xs-12">
				  <div class="contact-block">
					<form  method="POST">
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control" id="name" name="name"  required data-error="Please enter your name" type="text">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label >Email</label>
								<input type="text"  id="email" class="form-control" name="email" required data-error="Please enter your email" type="text">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="">Number</label>
								<input type="text"  id="number" class="form-control" name="number" required data-error="Please enter your number" type="number">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group"> 
								Message
								<textarea class="form-control" id="message"  rows="8" data-error="Write your message" name="message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit" name="submit">Send Message</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>


					 <?php
                 include 'connection.php';

if(isset($_POST['submit']))
{
                  $name=$_POST['name'];
                  $email=$_POST['email'];
                  $number=$_POST['number'];
                  
                  $message=$_POST['message'];
                  
                 

                  if($name=="")
                  {
                    echo "name field is empty";
                  }

                  else if ($email=="")
                   {
                    echo " email field is empty";
                  }

                else if ($number=="")
                   {
                    echo " number field is empty";
                  }

                 

                 else if ($message=="")
                   {
                    echo "message field is empty";
                  }

                  

                 
                  else{

                  $query="INSERT INTO `contact_us`(`Name`, `Email`, `Number`, `Message`) VALUES ('$name','$email','$number','$message')";
                  
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
				  </div>
				</div>
				
				
							
				
			</div>
		</div>
	</div>
</body>
</html>

