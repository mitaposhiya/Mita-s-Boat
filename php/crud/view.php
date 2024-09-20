<?php
include'config.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>view page</title>
    <link rel="stylesheet"
    href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h2>users</h2>
    <table class="table" >
        <thread>
           <tr>
            <th>firstname</th>
            <th>lastname</th>
            <th>mobile</th>
            <th>gender</th>
            <th>hobbies</th>
            <th>country</th>
            <th>status</th>
            <th>city</th>
           </tr>
        </thread>  
        <tbody>

            <?php
            $sql ="SELECT * FROM users ";

            $result =$conn->query($sql);
            
                 if($result->num_rows > 0){
                      while($row=$result->fetch_assoc( )){
             ?>
                    <tr>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['hobbies'];?></td>
                    <td><?php echo $row['country'];?></td>
                    <td><?php echo $row['status'];?></td>
                   <td><?php echo $row['city'];?></td>
                   <td><a href="update.php?id=<?php echo $row['id'];?>"> edit </a>
            
                   <a  href="delete.php?id=<?php echo  $row['id'];?>">delete</a></td>
                   </tr>
                 <?php    
                    }
                  }
              ?>
         </tbody>
    </table>
    </div>
</body>
</html>