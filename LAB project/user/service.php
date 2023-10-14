



<div id="services" class="services-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Services</h2>
						
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
					<?php 
                      $query="SELECT *from `add_services` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                          $service_name=$row['Name'];
                  $catagory=$row['Catagory'];
                  $date=$row['Date'];
                  $time=$row['Time'];
                  
                  $description=$row['Description'];
                  $type=$row['Type'];
                
                  
                       
                      ?>	<div class="item">
							

							<div class="serviceBox">
								
								<h3 class="title"><?php echo $service_name; ?></h3>
								<h4><?php echo $catagory; ?></h4>

								<p class="description">
									<?php echo $description; ?>
								</p>
								
							</div></div>
					
						 <?php

                         }
                      }
                       ?>
						</div></div></div></div></div>
					
								
			
					