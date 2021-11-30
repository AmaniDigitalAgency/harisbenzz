<?php
	include "site-functions.php";
	
function getalllistings($table){ 
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table ORDER BY listing_id ASC LIMIT 10";
	if ($result=mysqli_query($conn,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
		
      	$i = 1;
		foreach ($result as $alllistings => $all) {
			$location = substr($all['listing_location'], 0, 13);
			$slug = slugify($all['listing_title']);
			
			echo'<div class="col-lg-4 col-md-6 col-sm-12 service-block wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1100ms">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="dashboard/listing-uploads/'.$all['listing_picture'].'" alt="">
                                </figure>
                                <div class="caption-box">
                                    <div class="count-text"> -  '.$location.'..  </div>
                                    <h4><a href = "property/'.$all['listing_id'].'/'.$slug.'"> '.$all['listing_title'].' </a></h4> 
                                </div>
								
								<div class="caption-box2">
                                    <h4><a href = "property/'.$all['listing_id'].'/'.$slug.'"> '.$all['listing_title'].' </a></h4> 
									<button class = "btn bg-black h-100"><a href = "property/'.$all['listing_id'].'/'.$slug.'"> View Details + </a></button> 
                                </div>
								
                            </div>
                        </div>
                    </div>' ;
		$i++;
		}
	}

	mysqli_close($conn); 
}


function listingspage($table){ 
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table ORDER BY listing_id ASC LIMIT 21";
	if ($result=mysqli_query($conn,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
		
      	$i = 1;
		foreach ($result as $listingspage=> $lp) {
			$location = substr($lp['listing_location'], 0, 13);
			$slug = slugify($lp['listing_title']);
			
			echo'<div class="col-lg-4 col-md-6 col-sm-12 service-block wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1100ms">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="dashboard/listing-uploads/'.$lp['listing_picture'].'" alt="">
                                </figure>
                                <div class="caption-box">
                                    <div class="count-text"> -  '.$location.'..  </div>
                                    <h4><a href = "property/'.$lp['listing_id'].'/'.$slug.'"> '.$lp['listing_title'].' </a></h4> 
                                </div>
								
								<div class="caption-box2">
                                    <h4><a href = "property/'.$lp['listing_id'].'/'.$slug.'"> '.$lp['listing_title'].' </a></h4> 
									<button class = "btn bg-black h-100"><a href = "property/'.$lp['listing_id'].'/'.$slug.'"> View Details + </a></button> 
                                </div>
								
                            </div>
                        </div>
                    </div>' ;
		$i++;
		}
	}

	mysqli_close($conn); 
}





function getcategory($table,$cat){ 
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table where listing_type = '$cat' ORDER BY listing_id ASC LIMIT 10";
	if ($result=mysqli_query($conn,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
		
      	$i = 1;
		foreach ($result as $category=> $cat) {
			$location = substr($all['listing_location'], 0, 13);
			$slug = slugify($cat['listing_title']);
			
			echo'<div class="col-lg-4 col-md-6 col-sm-12 service-block wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1100ms">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="dashboard/listing-uploads/'.$cat['listing_picture'].'" alt="">
                                </figure>
                                <div class="caption-box">
                                    <div class="count-text"> -  '.$location.'..  </div>
                                    <h4><a href = "property/'.$cat['listing_id'].'/'.$slug.'"> '.$cat['listing_title'].' </a></h4> 
                                </div>
                            </div>
                        </div>
                    </div>' ;
		$i++;
		}
	}

	mysqli_close($conn); 
}