				<div class="page-inner mt--5">
				
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-stats">
											<div class="numbers">
												<p class="card-category"> Listed Properties </p>
												<h4 class="card-title">  
              <?php
                $sql="SELECT listing_id FROM listings";
	if ($result=mysqli_query($conn,$sql))
	{
      	
		$rowcount=mysqli_num_rows($result);
		echo $rowcount; 
	}
              ?>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-stats">
											<div class="numbers">
												<p class="card-category"> For Sale </p>
												<h4 class="card-title">
              <?php
                $sql="SELECT listing_id FROM listings WHERE listing_type = 'For Sale' ";
	if ($result=mysqli_query($conn,$sql))
	{
      	
		$rowcount=mysqli_num_rows($result);
		echo $rowcount; 
	}
              ?>												
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-12 col-stats">
											<div class="numbers">
												<p class="card-category"> For Rent</p>
												<h4 class="card-title">
              <?php
                $sql="SELECT listing_id FROM listings WHERE listing_type = 'For Rent' ";
	if ($result=mysqli_query($conn,$sql))
	{
      	
		$rowcount=mysqli_num_rows($result);
		echo $rowcount; 
	}
              ?>													
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body ">
									<div class="row"> 
										<div class="col-12 col-stats">
											<div class="numbers">
												<p class="card-category"> Both Sale And Rent </p>
												<h4 class="card-title">
              <?php
                $sql="SELECT listing_id FROM listings WHERE listing_type = 'Both Sale And Rent' ";
	if ($result=mysqli_query($conn,$sql))
	{
      	
		$rowcount=mysqli_num_rows($result);
		echo $rowcount; 
	}
              ?>													
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
<?php
	include "components/listing-component.cmp.php";
?>
					
				</div>