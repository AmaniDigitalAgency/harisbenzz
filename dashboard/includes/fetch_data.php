<?php

function getalllistings($table){
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table ORDER BY listing_id ASC LIMIT 38";
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
			
			echo'<tr>
						<td>'.$all['listing_title'].'</td>
						<td>'.$all['listing_location'].'</td>
						<td>'.$all['listing_price'].'</td>
						<td>
							<div class="form-button-action">
								<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
									<i class="fa fa-edit"></i>
								</button>
								<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
									<i class="fa fa-times"></i>
								</button>
							</div>
						</td>  
					</tr>' ;
		$i++;
		}
	}

	mysqli_close($conn); 
}

?> 

