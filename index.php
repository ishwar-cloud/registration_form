<!DOCTYPE html>    
 
<html lang="en">   
<head> 
    <meta name="viewport" contain="Width=device-width,initial-scale=1">
        
    s<?php include 'links.php' ?>
    <link rel="stylesheet" href="registration.css">
 
    <meta charset="UTF-8">   
    <title> Registration Form</title>    
        
</head>    
<body>    
    <h2>registration Page</h2><br>    
    <div class="login">    
    <form  action="" method="POST">    
        <label><b>User Name</b></label>    
        <input type="text" name="email" id="email" placeholder="email">    
        <br><br>  
        <label><b>First Name </b></label> 
        <input type="text" name="fname" id="fname" placeholder="First name">
        <br><br>
	<label><b> Last Name</b></label> 
        <input type="text" name="lname" id="lname" placeholder="Last name">
        <br><br> 
        
        <label><b>Password</b></label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>  
        <label> <b> Mobile No </b> </label> 
        <input type="number" name="phone" id="number" placeholder="mobile number">
        <br><br> 
    
        <br><br>
        <button type="submit"  name="submit"  class= class="btn btn-danger" value="Submit">
            submit
            </button>

        <br><br>    
         <a href="#">Login</a>    
    </form>     
</div>    
</body>    
</html> 



<?php
include 'conn.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $Pass = $_POST['Pass'];
    $phone = $_POST['phone'];
   

    $insertquery = "INSERT INTO registration (email, fname, lname, Pass,phone) values('$email','$fname','$lname','$Pass','$phone')";

    $result = mysqli_query($con,$insertquery);

    if ($result) {

        ?>
        <script>alert("data inserted properly");</script>
        <?php
     }
        
}
?>