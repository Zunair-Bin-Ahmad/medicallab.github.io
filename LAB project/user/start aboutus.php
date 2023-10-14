				
                            <div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">

					<div class="col-lg-12">
						<div class="title-box">
							<h2>About Us</h2>
							
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
<?php 
                 $query="SELECT * FROM `add_aboutus` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        { 
                        	$id=$row['id'];
                        	$date=$row['Date'];
                            $time=$row['Time'];
                            
                            $heading=$row['Heading'];
                            $description=$row['Description'];
                            
                            ?>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> <?php echo $heading; ?> </h2>
			


								<p><?php echo $description; ?> </p>

							
								
								
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
							
								<div class="about-m">
									<ul id="banner">
											<?php 
                 $query="SELECT * FROM `add_aboutus` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        { 
                        	
                            $image=$row['Image'];
                            
                           
                            
                            ?>
										<li>
											<img src="../Admin/<?php echo $row['Image']?>" alt="">
										</li>
									<?php

                         }
                      }
                       ?>
										
									</ul>
								</div>
			
							</div>
							 <?php

                         }
                      }
                       ?>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
