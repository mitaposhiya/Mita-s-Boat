<?php

include 'connection.php';
include 'header.php';


?>
<div id="main-content">
    
    <?php

    $page = isset($_GET['page']) ? ($_GET['page']) : 1;
    $limit=5;
   $offset=($page - 1)* $limit;

    ?>
    <div >
        <form action="index.php">
            <button  type="submit"  style="float:right; padding: 7px 7px; margin: 5px; display: inline-block; background-color:#786ea1;  border-radius: 10px; color: #fff;  text-transform: uppercase; transition: all 0.3s ease;">search</button>
            <input type="text" placeholder="enter your name..." value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>" name="search" style="float: right; padding: 7px 7px; margin: 5px; display: inline-block;   border-radius: 10px; transition: all 0.3s ease;" >
        </form>
       
    </div>
    <br><br><br>
    <div >
        <form action="index.php">
            <button  type="submit"  style="float: right; padding: 7px 7px;margin: 5px; display: inline-block; background-color:#786ea1;  border-radius: 10px; color: #fff;  text-transform: uppercase; transition: all 0.3s ease;">filter</button>
            <input type="date" placeholder="date" value="<?php if(isset($_GET['date'])) {echo $_GET['date'];}?>" name="date" style="float: right; padding: 7px 7px; margin: 5px;  display: inline-block;  border-radius: 10px; transition: all 0.3s ease;" >
        </form>
       
    </div>
    <table cellpadding="15px">
        <thead>
        <th><b>Id</b></th>
        <th><b>Name</b></th>
        <th><b>Address</b></th>
        <th><b>Class<b></th>
        <th><b>Phone<b></th>
        <th><b>Created_at<b></th>
        <th><b>Action<b></th>
        </thead>
        <tbody>
            <?php 
             $search = isset($_GET['search']) ? $_GET['search'] : '';
            
           
            if(isset($_GET['date'])){
                $date=$_GET['date'];
                $sql="SELECT * FROM student JOIN studentclass  ON student.class = studentclass.cid WHERE  created_at = '$date'";

            }else{
                $sql="SELECT * FROM student JOIN studentclass  ON student.class = studentclass.cid  WHERE CONCAT(student.name , student.id, student.address, studentclass.cname) LIKE '%$search%'LIMIT {$offset},{$limit}";

            }
             $result= $conn->query($sql) or die("query error: ")."<br>";
             if($result->num_rows>0){
             while ($row=$result->fetch_assoc()){

            ?>
            <tr >
                <td><b><?php echo $row['id'];?></b></td>
                <td><b><?php echo $row['name'];?></b></td>
                <td><b><?php echo $row['address'];?></b></td>
                <td><b><?php echo $row['cname'];?></b></td>
                <td><b><?php echo $row['phone'];?></b></td>
                <td><b><?php echo $row['created_at'];?></b></td>
                <td>
                    <a href="edit.php?search=<?php echo $search; ?>&page=<?php echo $page;?>&id=<?php echo $row['id'];?>">Edit</a>
                    <a href="delete-inline.php?page=<?php echo $page;?>&id=<?php echo $row['id'];?>"><b>Delete</b></a>
                </td>
            </tr>
            <?php } ?>    
       
        </tbody>
    </table>
    <?php }  
    else{
         echo "no-record available";
    }
    $sql1="SELECT * FROM student";
    $result1 =$conn->query($sql1) or die("error occured ");

    if($result1->num_rows>0){
        $totalrecord=$result1->num_rows;
      
        $total_page=ceil($totalrecord/$limit);
        echo '<ul class="pagination text-center">'; 
        if($page>1) {echo '<li><a href="index.php?search='.$search.'&page='.($page - 1).'"><<</a></li>';}
        for($i=1; $i <= $total_page; $i++){
            if($i == $page){
                $active = "active";
            }
            else{
               $active= " ";
            }
           echo '<li><a href="index.php?search='.$search.'&page='.$i.'">'.$i.'</a></li>'; 
        }
        if($total_page>$page){ echo '<li><a href="index.php?search='.$search.'&page='.($page + 1).'">>></a></li>';}
        echo '</ul>';
        
    }
    ?>
  

      
  

</div>
</div>
</body>
</html>
