<?php
include 'connection.php';

$sname =$_POST['name'];
$saddress =$_POST['address'];
$sclass =$_POST['class'];
$sphone =$_POST['phone'];
$screated_at =$_POST['created_at'];

$sql="INSERT INTO student ( name,address,class,phone,created_at) VALUES ('$sname','$saddress','$sclass','$sphone','$screated_at')";
$result= $conn->query($sql) or die("query error: ")."<br>";

header('location: index.php');
?>