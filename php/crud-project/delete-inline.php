<?php 
include 'connection.php';
include 'index.php';
$page=$_GET['page'];

$stu_id= $_GET['id'];
$sql=" DELETE FROM student WHERE id='$stu_id'";
$result=$conn->query($sql) or die("unsuccessful");

header('location: index.php?page='.$page);

$conn->close();
?>