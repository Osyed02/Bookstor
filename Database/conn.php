<?php

$db_server = 'localhost';
$db_user = 'root';
$db_password = 'mysql';
$db_database = 'bookstor';

$conn = mysqli_connect($db_server,$db_user,$db_password,$db_database);
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
      // echo"Osyed";
  }
?>