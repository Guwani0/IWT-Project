<?php
require 'configure.php';
session_start();

if(!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($con, "SELECT * FROM admin WHERE ID = '$sessionid'");
    $row = mysqli_fetch_assoc($result);
} 
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/demosanjana.css">
    <link rel="stylesheet" href="styles/adminprofile.css">
    <link rel="stylesheet" type="text/css" href="styles/profile.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Admin Profile| IMA 2024</title>
  
</head>
<body>
    <div class="head">
    <img src="images/logo.png" width="100px">
    <h1>International Music Awards</h1>
    </div>
    <br>
    <div>
    <h1 class="header1" style="font-size: xxx-large; margin-top:130px;"> Admin Profile </h1>
</div>
    <div class="container">
   
    <div class="profile">

       <span id="result-FirstName" ><h4> Name       : </h4></span> <div class="values"><?php echo $row["Name"]; ?> </div><br><br>
       <span id="result-email" > <h4> Email             : </h4> <div class="values"></span><?php echo $row["A_Email"]; ?> </div> <br><br> 
       <span id="result-password" ><h4> Password         :</h4> <div class="values"></span><?php echo $row["A_password"]; ?> </div><br><br>
      
    </div><br>
    </div>
    
    <br><br><br>
    <div class="wrapper">
        <div class="card" style="margin-top:-330px">
            <div class="info">
                <h1> <a href="logout.php">  Logout </a>  </h1>
            </div>
        </div>
    </div>


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
            <ul><li><a href="postlogin.php">Home</a></li>
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

    </body>


    
    
</html>