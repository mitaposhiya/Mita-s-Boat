<?php

include 'connection.php';
$page=$_POST['page'];
$search=$_POST['search'];
$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$class=$_POST['class'];
$phone=$_POST['phone'];

$sql="UPDATE student SET name='$name',address='$address',class='$class',phone='$phone' WHERE id='$id'";
$result=$conn->query($sql) or die("unsuccessfull");

header('location: index.php?search='.$search . '&page='.$page);

$conn->close();
?>