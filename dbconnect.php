<?php
//file:dbconnect.php
//dev: Rahul Negi
//dev url: www.tutsapp.com

$con=@mysqli_connect("localhost","username","rahul","datatbasename");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
