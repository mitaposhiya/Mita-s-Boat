<?php
include 'config.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="DELETE FROM users WHERE id=$id";

    $result=$conn->query($sql);

    if($result == TRUE){
        ECHO"RECORD DELETED";

    }
    else{
        echo "error:".$sql."<br>".$conn->error;
        header('Location: view.php');
        exit();
    }
}
?>  