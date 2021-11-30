<?php
	$category = $_GET["name"];
	$page = "Listings";  
	include "header.php"; 
	include "components/breadcrumb.php"; 
	include "components/search.php"; 
	include "components/featured.php"; 
	include "components/counter.php";
	//include "components/testimonial.php";
?> 
 
	
<?php
	include "footer.php";
?>