
<!DOCTYPE html>
<html style="margin: 50px; ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <?php
    $nameerr=$emailerr=$phoneerr=$addresserr=$gendererr=$hobbieserr=$cityerror=$imgerr="";
    $name=$email=$phone=$address=$gender=$hobbies=$city=$img=[];

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST['name'])){
           $nameerr="Name Is Required";
        }
        else{
            $name= $_POST['name'];
            // if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            //     $nameErr = "Only letters and white space allowed";
            // }

        }
        if(empty($_POST['email'])){
            $emailerr= "Email Is Required";
        }
        else{
            $email= $_POST['email'];

        //    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //       $emailErr = "Invalid email format";
        //    }

        }
        if(empty($_POST['phone'])){
            $phoneerr= "Phone Is Required";
        }
        else{
            $phone= $_POST['phone'];
            //  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i")) {
            //       $phoneerr = "Invalid URL";
            //   }

        }
        if(empty($_POST['address'])){
            $addresserr= "Address Is Required";
        }
        else{
            $address= $_POST['address'];
        }
        if(empty($_POST['gender'])){
            $gendererr= "gender is required";
        }
        else{
            $gender=$_POST['gender'];
        }
        if(empty($_POST['Hobbies'])){
            $hobbieserr= "Hobbies Is Required";
        }
        else{
            
            $hobbies= $_POST['Hobbies'];
        }
        if(empty($_POST['city'])){
            $cityerror= "City Is Required";
        }
        else{
            $city=$_POST['city'];
        }
        if(empty($_POST['image'])){
            $imgerr= "Image Is Required";
        }
        else{
            $img= $_POST['image'];
        }
    }


    ?>
    <h1><b>Registration Form</b></h1>
    <form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
        <div class="name">
            <label><b>Your name <i>*</i></b></label>
            <p>Please Enter Your Name</p>
            <input type="name" id="name" name="name" placeholder=" Your Name"   >
            <br>
            <span class="error" style="color:red;"><?php echo $nameerr?></span>
            <br><br>
        </div>
        <div class="email">
            <label><b>Email<i>*</i> </b></label>
            <p>Please Enter Your Email</p>
            <input type="email" id="email" name="email" placeholder=" Your Email" >
            <br>
            <span class="error" style="color:red;"><?php echo $emailerr?></span>
            <br><br>
        </div>
        <div class="phone">
            <label><b>Phone<i>*</i> </b></label>
            <p>Please Enter Your Number</p>
            <input type="Phone" id="Phone" name="phone" placeholder=" Your Phone" pattern="[0-9]{10}" >
            <br>
            <span class="error" style="color:red;"><?php echo $phoneerr?></span>
            <br><br>
        </div>
        <div class="address">
            <label><b>Address<i>*</i> </b></label>
            <p>Please Enter Your Address</p>
            <textarea placeholder="enter your address"  name="address"></textarea>
            <br>
            <span class="error" style="color:red;"><?php echo $addresserr?></span>
            <br><br>
        </div>
        <div>
            <label><b>Gender</b></label>
            <p>Please Enter Your Gender</p>
            <br>
            <input type="radio" id="male" name="gender" value="male" >
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
            <br>
            <span class="error" style="color:red;"><?php echo $gendererr?></span>
            <br><br>
        </div>
        <div>
            <label><b>Hobbies</b></label>
            <p>Please Enter Your Hobbies</p>
            <br>
            <input type="checkbox" id="dance" name="Hobbies" value="1" >
            <label>Dance</label>
            <br>
            <input type="checkbox" id="travel" name="Hobbies" value="2">
            <label>Travel</label>
            <br>
            <input type="checkbox" id="sing" name="Hobbies"value="3">
            <label>Sing</label>
            <br>
            <input type="checkbox" id="read" name="Hobbies" value="4">
            <label>Read</label>
            <br>
            <span class="error" style="color:red;"><?php echo $hobbieserr?></span>
            <br><br>
        </div>
        <div class="city">
            <label><b>City</b></label>
            <p>Please Enter Your City </p>
            <br>
            <select name="city">
                <option>Select city</option>
                <option id="anand">Anand</option>
                <option id="surat">Surat</option>
                <option id="rajkot">Rajkot</option>
                <option id="amreli">Amreli</option>
                <option id="vadodra">Vadodra</option>
            </select>
            <br>
            <span class="error" style="color:red;"><?php echo $cityerror?></span>
            <br><br>
        </div>
        <div class="image">
            <label for="image"><b>Image<i>*</i> </b></label>
            <br><br>
            <input type="file" id="image"  width="50px" name="image">
            <br>
            <span class="error" style="color:red;"><?php echo $imgerr?></span>
        </div>

        <button type="submit"><b>Submit</b></button>

    </form>
</body>

</html>

