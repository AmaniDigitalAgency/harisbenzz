<?php

	//define('DEBUG', false);
	//error_reporting(E_ALL);
	//ini_set('display_errors', DEBUG ? 'On' : 'Off');
	$dbServerName = "localhost";
	$dbUsername = "harisbenzz_haris";
	$dbPassword = "harisbenzz";
	$dbName = "harisbenzz_haris";
	date_default_timezone_set("Africa/Kampala");
	$db = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);
	$url   = "http://harisbenzz.com/";	
	include 'site-functions.php';
?>