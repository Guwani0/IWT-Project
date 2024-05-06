<?php
require 'configure.php';
session_start();

if(!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($con, "SELECT * FROM registered_user WHERE ID = '$sessionid'");
    $row = mysqli_fetch_assoc($result);
} 

$id = $row['ID'];

    // $id=$_POST['id'];
    $sql="SELECT * FROM `registered_user` WHERE ID=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $fname=$row['First_Name'];
    $lname=$row['Last_Name'];
    $email=$row['Email'];
    $contact=$row['Contact_No'];
    $dob=$row['DOB'];
    $country=$row['Country'];

if(isset($_POST['submit']))
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $dob=$_POST['dob'];
    $country== $_POST['country'];

    $sql="update registered_user set First_Name='$fname',Last_Name='$lname', Email='$email', Contact_No='$contact', DOB='$dob', Country='$country' where id=$id";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script> alert('Updated Successfully'); </script>";
        header('location:userprofile.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/navigation.css">
    <!--<link rel="stylesheet" href="styles/loginstyles.css"> -->
    <link rel="stylesheet" type="text/css" href="styles/editprofile.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> Edit Profile| IMA 2024</title>
    <style>
            @font-face{
            font-family:Future;
            src: url('../IMA/fonts/future.ttf');
        }
            body{
                font-family:"Future";
            }
    </style>
</head>
<body>
    <img src="images/logo.png" width="100px" style="margin-top:20px; margin-left:50px;">
    <header class="header">

    <nav class="navbar">
        <a href="#">  Home </a> 
        <a href="#"> IMA 2024 </a> 
        <a href="#"> Archives </a> 
        <a href="#"> Gallery </a> 
        <a href="#"> The IMA Story </a> 
        <a href="#"> Download The App </a> 
        <a href="#"> Contact Us </a> 
    </nav>
    </header>

    <h1 class="header1" style="font-size: xxx-large;"> Edit Profile Details </h1>

    <div class="container">
        <form method="post">
       
        <div class="form-group">
            <label>First Name </label><br>
            <input type="text" class="form-control" placeholder="Enter Your Name" 
            name="firstname" value=<?php echo $fname;?>><br>
        </div>        
        
        <div class="form-group">
            <label>Last Name</label><br>
            <input type="text" class="form-control" placeholder="Enter Your Name" 
            name="lastname" value=<?php echo $lname;?>><br>
        </div>

        <div class="form-group">
            <label>E-mail</label><br>
            <input type="email" class="form-control" placeholder="Enter Your E-mail" 
            name="email" value=<?php echo $email;?>><br>
        </div>

        <div class="form-group">    
            <labe> Contact Number</label><br>
            <input type="text" class="form-control" placeholder="Enter Your Contact Number" 
            name="contact" value=<?php echo $contact;?>><br>
        </div>
      
        <div class="form-group">    
            <labe> Date of Birth </label><br>
            <input type="date" class="form-control" placeholder="Enter Your Date of Birth" 
            name="dob" value=<?php echo $dob;?>><br>
        </div>

        <div class="form-group">    
            <labe> Country </label><br>
            <input type="text" class="form-control" placeholder="Enter Your Country" 
            name="country" value=<?php echo $country;?>><br>
        </div>
        <p> <u> <b><a href="passwordReset.php" style="text-decoration:none; color:black;" > Reset Password </a> </u> </b> </p>
        <br> <br> 
        <div> <button type="submit" name="submit" class="primary" style="margin-top:-50px"> Update </button>
        </div>   </div>
    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.google.com/"><i class="fa-brands fa-google-plus"></i></a>
                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footerNav">
                <ul><li><a href="postlogin1.php">Home</a></li>
                <li><a href="download.php"> Download The App</a></li>
                <li><a href="ima_story.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="FAQ.php"> FAQ </a></li>
            </ul>
            </div>
            
        </div>
        <div class="footerBottom">
            <p>&copy; 2024 IMA Media Networks, a division of IMA Global Inc. All Rights Reserved.</p>
        </div>
    </footer>

    </form>
    </div>
</body>
</html>