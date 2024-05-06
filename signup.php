<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
            @font-face{
            font-family:Future;
            src: url('../IWT-Project/fonts/future.ttf');
        }
            body{
                font-family:"Future";
            }
        </style>
    <title> Sign Up| IMA 2024 </title>
</head>
<body>
    <img src="images/logo.png" width="100px" style="margin-top:20px; margin-left:50px;">
    <header class="header">
    <nav class="navbar">
    <a href="postlogin1.php">  Home </a> 
      <a href="Category.php"> IMA 2024 </a> 
      <a href="#"> Archives </a> 
      <a href="#"> Gallery </a> 
      <a href="ima_story.php"> The IMA Story </a> 
      <a href="download.php"> Download The App </a> 
      <a href="contactus.php"> Contact Us </a> 
    </nav> 
    </header>
    <h1 class="header1" style="font-size: xxx-large; color:gold; text-shadow:5px 5px 10px black;">SIGN UP</h1>

    <div class="login-box">
        <form method="post" action="signupinsert.php">
            <input type="text" name="fname" placeholder="First Name" required> <br> <br> 
            <input type="text" name="lname" placeholder="Last Name" required> <br> <br> 
            <input type="email" name="email" placeholder="Email" required> <br> <br>
            <input type="text" name="pnumber" placeholder="Contact Number" required><br> <br>
            <input type="date" name="dob" placeholder="Date of Birth" required > <br> <br>
            <input type="text" name="country" placeholder="Country" required> <br> <br>
            <input type="password" name="uPassword" placeholder="Password" required> <br> <br>
            <input type="password" name="reUpassword" placeholder="Confirm Password" required> <br><br>
        
            <input type="submit" value="SIGN UP"  class="su" style=" cursor: pointer;"> <br> <br>

            <p style="text-align: center;" class="para1"> Already have an account? <br> <br>
            <button type="submit" class="admin"> <a href="login.php" style="text-decoration:none; color:white"> LOG IN </button> </a>
    </form>
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
                <ul><li><a href="index.php">Home</a></li>
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
