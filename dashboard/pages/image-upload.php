				<?php $listing_id = $_GET["listing_id"]; ?>

				<div class="page-inner mt--5">
				
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title"> Set Listing Images   </h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add Property
										</button>
									</div>
								</div>
								<div class="card-body">
							<form action="includes/image-upload.inc.php" method="post" enctype="multipart/form-data">
								Select Image Files to Upload:
								<input type="file" name="files[]" multiple required>
								<input type="number" name="listing_id" value = "<?php echo $listing_id ?>" hidden>
								<input class = "btn btn-secondary" type="submit" name="submit" value="UPLOAD">
							</form>
						</div>   
						</div>   
					</div> 
					</div> 					
				</div>