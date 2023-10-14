	



<?php 
                      $query="SELECT * from `add_address` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                          $address=$row['Address'];
                            $email1=$row['Email1'];
                            $email2=$row['Email2'];
                            $phoneno1=$row['Phoneno1'];
                            $phoneno2=$row['Phoneno2'];
                       
                      ?>



	<div id="contact" class="contact-box">
		<div class="container">
			
			<div class="row ">
				
				<div class="col-lg-12 col-xs-12">
				  <div class="contact-block">




	<div class="col-lg-12 col-xs-12">
					<div class="left-contact">
						<h2>Address</h2>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Address</h4>
								<p><?php echo $address; ?></p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Email</h4>
								<a href="#"><?php echo $email1; ?></a><br>
								<a href="#"><?php echo $email2; ?></a>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Phone Number</h4>
								<a href="#"><?php echo $phoneno1; ?></a><br>
								<a href="#"><?php echo $phoneno2; ?></a>
								<?php

                         }
                      }
                       ?>
							</div>
						</div>
					</div>
				</div>
</div></div></div></div></div>