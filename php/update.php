<?php
include'config.php';
if(isset($_POST['update'])){
  // PRINT_R($_POST);DIE;
    $id=$_POST['edit_id'];
    $first_name= $_POST['firstname'];
    $last_name= $_POST['lastname'];
    $mobile= $_POST['mobile'];
    $gender= isset($_POST['gender']) ? $_POST['gender'] : null;
    $hobbies= isset($_POST['hobbies']) ? $_POST['hobbies']: [];
    $hobbies_str=implode(" ",$hobbies);
    
    $hobbies_str=$_POST['hobbies'];
    $country= $_POST['country'];

    $status= $_POST['status'];
    $city= $_POST['city'];

    $sql="UPDATE users SET firstname=' $first_name', lastname=' $last_name',mobile=' $mobile',gender=' $gender',hobbies=' $hobbies_str',country=' $country',status=' $status',city=' $city' WHERE id=$id";
    // echo $sql;
    // die;
     
    $result=$conn->query($sql);
    if($result == TRUE){
      echo"new record successfully created";
     
 
     }
     else{
         echo "error occured".$conn->error;
     }


}
$row=null;
if(isset($_GET['id']))
{
    $id =$_GET['id'];

    $sql="SELECT * FROM users where id=$id";
   
    $result =$conn->query($sql);
  
    if($result->num_rows >0){
      $row = $result->fetch_assoc();
    
            
?>
<html>
<body>
        <h2> user update</h2>
        <form method="POST">
        <fiedset>
            <legend>personal info:</legend>
            <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
            firstname:<br>
            <input type="text"  name="firstname" value="<?php echo $row['firstname'];?>"><br>
            lastname:<br>
            <input type="text"  name="lastname" value="<?php echo $row['lastname'];?>"><br>
            mobile:<br>
            <input type="text"  name="mobile" value="<?php echo $row['mobile'];?>"><br>
            <label for="gender">Gender:</label><br>

            <input type="radio" id="male" name="gender" value="Male"<?php if($row['gender'] == 'Male') {echo "checked";}?> >
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="Female" <?php if($row['gender']  == 'Female') {echo "checked";}?>>
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="Other" <?php if($row['gender']  == 'Other') {echo "checked";}?>>
           <label for="other">Other</label><br><br>

           <?php

            function gethobbies($hobbies,$myhobbies){
              
               $hobbies_arr=null;
              if(!empty($hobbies)){
                $hobbies_arr=explode(",",$hobbies);
              
            
                 if(in_array($myhobbies,$hobbies_arr)){
                 echo  "checked" ;
                }
               
              }
            }
           ?>

           <label for="hobbies">Hobbies:</label><br>
           
           <input type="checkbox" id="reading" name="hobbies" value="Reading" <?php gethobbies($row['hobbies'],"Reading")?>>
           <label for="reading">Reading</label><br>
           <input type="checkbox" id="sports" name="hobbies" value="Sports" <?php gethobbies($row['hobbies'],"Sports")?>>
           <label for="sports">Sports</label><br>
           <input type="checkbox" id="music" name="hobbies" value="Music" <?php gethobbies($row['hobbies'],"Music")?>>
           <label for="music">Music</label><br>
           <input type="checkbox" id="traveling" name="hobbies" value="Traveling" <?php gethobbies($row['hobbies'],"Traveling")?>>
           <label for="traveling">Traveling</label><br><br>

           <label>country:</label>
            <?php
            $sql="SELECT * FROM users";
            $result=$conn->query($sql) or die("error:");
          
             if($result->num_rows>0){
              echo'<select  name="country">';
               while($row=$result->fetch_assoc()){
                $countrys=array('india','us','america','german','canada','uk');
                  if($row['country'] === $countrys)
                    $select="selected";

                    echo " <option {$select} value='{$row['countrys']}'> {$row['country']} </option>";
               }
                
               echo "</select><br><br>";
             }
            ?>
            status:
            <select id="status" name="status">
              <option  value="single" <?php if($row['status'] == 'single') {echo "checked";}?>>single</option>
              <option  value="married" <?php if($row['status'] == 'married') {echo "checked";}?>>married</option>
              <option  value="other" <?php if($row['status'] == 'other') {echo "checked";}?>>other</option>
            </select><br><br>
            city:
            <select id="city" name="city">
              <option  value="rajkot" <?php if($row['city'] == 'rajkot') {echo "checked";}?>>rajkot</option>
              <option  value="surat"  <?php if($row['city'] == 'surat') {echo "checked";}?>>surat</option>
              <option  value="ahm"  <?php if($row['city'] == 'ahm') {echo "checked";}?>>ahm</option>
              <option  value="amreli"  <?php if($row['city'] == 'amreli') {echo "checked";}?>>amreli</option>
              <option  value="vadodra"  <?php if($row['city'] == 'vadodra') {echo "checked";}?>>vadodra</option>
              <option  value="bhesan"  <?php if($row['city'] == 'bhesan') {echo "checked";}?>>bhesan</option>
              <option  value="kesod"  <?php if($row['city'] == 'kesod') {echo "checked";}?>>kesod</option>
            </select><br><br>
            
            <input type="submit" value="update" name="update">
            

        </fiedset>
      </form>
      <?php

        
            }
          } 
       else {
        // if id is not valid
          header('Location: view.php');
         exit();
        }
      ?>
    </body>
</html>
