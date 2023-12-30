<?php
/*
Author: TitovV
*/


$con = mysqli_connect("localhost","username","password","Minecraft");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>