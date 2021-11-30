<?php
	session_start(); 
	include "dbh.inc.php"; 
	
if (isset($_POST['add'])){ 
	
	$user_name = $_POST['user_name'];
	$user_password = $_POST['user_password'];
	
	
	$sql = "SELECT * FROM users WHERE user_name = '$user_name' and user_password = '$user_password' ";
	
	if ($result=mysqli_query($conn,$sql)) {
	
		$rowcount=mysqli_num_rows($result);
		
		if ($rowcount > 0) { 
			$_SESSION['user_name'] = $user_name; 
			header("Location: ../");
		 } else {
			header("Location: ../");
		} 
	}	else {
			header("Location: ../");
	}
} else {
	echo "Click Te Damn Button"; 
}
?>	