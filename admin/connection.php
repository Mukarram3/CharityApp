<?php

$server="localhost";
$username="root";
$password="";
$database="charity_system";

$conn= mysqli_connect($server,$username,$password,$database);
if(!$conn){
  echo "not connected";
}


?>