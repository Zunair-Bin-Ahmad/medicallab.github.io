<div class="ulockd-home-slider">
		<div class="container-fluid">
			
			<div class="row">
				
				<div class="pogoSlider" id="js-main-slider">
					<?php $query="SELECT * FROM `add_slider` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        { 
                        	$image=$row['Image'];
                        	?>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(../Admin/<?php echo $row['Image']?>);">
						
					</div>
					<?php  }
		}?>
				
				<!-- .pogoSlider -->
		</div>
		</div>
	</div></div>