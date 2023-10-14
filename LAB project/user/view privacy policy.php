<div id="blog">
<?php 
                      $query="SELECT * from `privacypolicy` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                          $name=$row['Name'];
                          $date=$row['Date'];
                  $time=$row['Time'];
                 $id=$row['id'];
                  
                       
                      ?>




						
					
			<div id="services" class="services-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
<center><h2>Privacy Policy</h2></center>
						<p><?php echo $name; ?></p><br>
								
								
								 <?php

                         }
                      }
                       ?>
					</div>
				</div>
			</div>
			</div></div>
			</div>
									
						