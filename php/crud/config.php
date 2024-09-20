<?php
$servername="localhost";
$username="root";
$password= "";
$dbname="mydb";

$conn=  new mysqli($servername,$username,$password,$dbname);

if($conn){
  echo "connection:connection created"."<br>";
}

?>