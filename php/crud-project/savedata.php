<?php
include 'connection.php';

$sname =$_POST['name'];
$saddress =$_POST['address'];
$sclass =$_POST['class'];
$sphone =$_POST['phone'];

$sql="INSERT INTO student ( name,address,class,phone) VALUES ('$sname','$saddress','$sclass','$sphone')";
$result= $conn->query($sql) or die("query error: ")."<br>";

header('location: index.php');
?>