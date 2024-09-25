 <?php 
 include 'connection.php';
 include 'header.php';
  ?>
<div id="main-content">
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" required/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" required/>
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
             <option value="" selected disabled required>Select Class</option>
                
             <?php
             $sql="SELECT * FROM studentclass";
             $result= $conn->query($sql) or die("query error: ")."<br>";
             while($row=$result->fetch_assoc()){
              ?>
               
             <option value="<?php echo $row['cid']; ?>"> <?php echo $row['cname'];?></option>
             <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" required/>
        </div>
       
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="created_at" required/>
        </div>
       
        <input class="submit" type="submit" value="Save"  />
      
    </form>
  
</div>
</div>
</body>
</html>
