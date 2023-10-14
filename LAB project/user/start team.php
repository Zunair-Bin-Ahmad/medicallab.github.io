<div id="team" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Our Doctor</h2>
						
					</div>
				</div>
			</div>
			
			<div class="row"><?php $query="SELECT * FROM `add_team` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                            $id=$row['id'];
                          
                            $date=$row['Date'];
                            $time=$row['Time'];
                            $name=$row['Name'];
                            $designation=$row['Designation'];
                            $image=$row['Image'];
                         ?>
                <div class="col-md-4 col-sm-6">
                    
                         <div class="our-team">
                        
                        <div class="pic">
                            <img src="../Admin/<?php echo $row['Image']  ?>" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title"><?php echo $name; ?></h3>
                            <span class="post"><?php echo $designation; ?></span>
                           
                        </div>

                    </div>                      
                </div>  <?php  }
        }?>

              
               
            </div>
			
		</div>
	</div>