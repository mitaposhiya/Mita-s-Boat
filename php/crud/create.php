<?php
include 'config.php';


 if(isset($_POST['submit'])){ 
   //print_r($_POST);
   //die;
  
    $first_name= $_POST['firstname'];
    $last_name= $_POST['lastname'];
    $mobile= $_POST['mobile'];
    $gender= $_POST['gender'];
    $hobbies= isset($_POST['hobbies']) ? $_POST['hobbies']: [];
    $hobbies_str=implode(",",$hobbies);
   
    $country= $_POST['country'];
    $status= $_POST['status'];
    $city= $_POST['city'];


    $sql=" INSERT INTO users(firstname,lastname,mobile,gender,hobbies,country,status,city) VALUES('$first_name','$last_name','$mobile','$gender','$hobbies_str','$country','$status','$city')";
    
    $result=$conn->query($sql);
     
    if($result == TRUE){
     echo"new record successfully created";
     header("Location: view.php");
    exit();

    }
    else{
        echo "error occured".$conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html>
    <body>
    <h1>SIGNUP FORM</h1>

    <form method="POST">
        <fieldset>
          <legend >personal info:</legend>
            firstname:<br>
            <input type="text"  name="firstname"><br>
            lastname:<br>
            <input type="text"  name="lastname"><br>
            mobile:<br>
            <input type="text"  name="mobile"><br>

            <label for="gender">Gender:</label><br>

            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="Other">
           <label for="other">Other</label><br><br>

           <label for="hobbies">Hobbies:</label><br>

           <input type="checkbox" id="Reading" name="hobbies" value="Reading">
           <label for="reading">Reading</label><br>
           <input type="checkbox" id="Sports" name="hobbies" value="Sports">
           <label for="sports">Sports</label><br>
           <input type="checkbox" id="Music" name="hobbies" value="Music">
           <label for="music">Music</label><br>
           <input type="checkbox" id="Traveling" name="hobbies" value="Traveling">
           <label for="traveling">Traveling</label><br><br>

        <label>country:</label>
        <?php
            $sql="SELECT * FROM users";
            $result=$conn->query($sql) or die("error:");
          
             if($result->num_rows>0){
              echo'<select  name="country">';
               while($row=$result->fetch_assoc()){
                $countrys=array("india","us","america","german","canada","uk");
                  if($row['country'] === $countrys)
                    $select="selected";

                    echo " <option {$select} value='{$row['countrys']}'> {$row['country']} </option>";
               }
                
               echo "</select><br><br>";
             }
            ?>

            status:
            <select id="status" name="status">
              <option  value="single">single</option>
              <option  value="married">married</option>
              <option  value="other">other</option>
            </select><br><br>
            city:
            <select id="city" name="city">
              <option  value="rajkot">rajkot</option>
              <option  value="surat">surat</option>
              <option  value="ahm">ahm</option>
              <option  value="amreli">amreli</option>
              <option  value="vadodra">vadodra</option>
              <option  value="bhesan">bhesan</option>
              <option  value="kesod">kesod</option>
            </select><br><br>
            <input type="submit" name="submit">


        </fieldset>

    </form>
  </body>
</html>

