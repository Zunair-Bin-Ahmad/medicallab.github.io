<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Gallery</h2>
						
					</div>
				</div>
			</div>
			
			<div class="popup-gallery row clearfix">
				<?php $query="SELECT * FROM `add_gallery` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        { ?>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="../Admin/<?php echo $row['Image']  ?>" alt="">
						<div class="box-content">	
							<h3 class="title"><?php echo $row['Title'] ?></h3>
							<ul class="icon">
								<li><a href="images/gallery-01.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
			<?php  }
		}?>
		
			</div>
		</div>
	</div>