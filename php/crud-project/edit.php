<?php 
include 'connection.php';
include 'header.php'; ?>

<div id="main-content">
    
    <?php
  
   
    $stu_id=$_GET['id'];
    $sql="SELECT * FROM student WHERE id=$stu_id";
    $result= $conn->query($sql) or die("query error: ")."<br>";
    
   
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
     

    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="search" value="<?php echo $_GET['search'];?>"/>
          <input type="hidden" name="page" value="<?php echo $_GET['page'];?>"/>
          <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
          <input type="text" name="name" value="<?php echo $row['name'];?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" value="<?php echo $row['address'];?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php 
          $sql1="SELECT * FROM studentclass"; 
          $result1=$conn->query($sql1) or die("query error:")."<br>";
          if($result1->num_rows>0){
            echo '<select name="class">';
            while($row1=$result1->fetch_assoc()){
         
                 if($row['class'] == $row1['cid']){
                   $select="selected";
                 }
                 else{
                    $select="";
               }
              
              echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
            }
              echo "</select>";
        }
        ?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" value="<?php echo $row['phone'];?>"/>
      </div>
      <div class="form-group">
          <label>Date</label>
          <input type="date" name="created_at" value="<?php echo $row['created_at'];?>"/>
      </div>
      <input class="submit" type="submit" value="Update" />
    </form>
    <?php 
 
  } }

    ?>
</div>
</div>
</body>
</html>
