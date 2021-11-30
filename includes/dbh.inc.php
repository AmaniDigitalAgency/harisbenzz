<?php

/*
$conn=mysqli_connect("localhost", "harisbenzz_haris", "harisbenzz", "harisbenzz_haris");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }*/
  
$conn=mysqli_connect("localhost", "root", "", "haris");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
 ?>