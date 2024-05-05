<?php
session_start(); 

require 'configure.php';
if(isset($_POST['submit']))
{
  $email = $_POST['useremail'];
  $password = $_POST['password'];
  $result = mysqli_query($con, "SELECT * FROM registered_user WHERE Email = '$email' OR U_password = '$password'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0)  
  {
    if($password == $row['U_password'])
    {
      $_SESSION['login'] = true;
      $_SESSION['email'] = $row["Email"];
      echo "<script> alert('Login Successful'); </script>";  
      header("location: postlogin1.php");
      exit();
    }

    else{
      echo
      "<script> alert('Wrong Password'); </script>";
      // header("location: login.php");

    }
  }  
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
    // header("location: login.php");

  }

  
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/loginstyles.css">
  <link rel="stylesheet" href="styles/navigation.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
            @font-face{
            font-family:Future;
            src: url('../IMA/fonts/future.ttf');
        }
            body{
                font-family:"Future";
            }
        </style>
  <title>Login|IMA 2024</title>
</head>

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

<body>
        <h1 class="header1" style="font-size: xxx-large;">LOG IN</h1>
<div class="login-box">
    <form id="login" method="POST" autocomplete="on">

    <input type="text" id="email" name="useremail" placeholder="User Email">
    <input type="password" id="password" name="password" placeholder="User Password"><br><br>

    <p class="ReFo"><input type="checkbox" id="rememberme" name="rememberme">
    Remember me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="kofie" style="margin-left:185px">Forgot password?</a></p><br>

    <button type="submit" name="submit" class="su">LOG IN</button>
    <p style="text-align: center;" class="para1">Don't have an account?</p>&nbsp;
    <a href="signup.php" class="su">SIGN UP</a>
    <br> <br> <p style="text-align: center;" class="para1">Admin log in here</p>&nbsp;
    <button type="submit" class="admin">Admin</button> <br><br>

</div>
  </form>

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
                <li><a href="">Download The App</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">FAQ</a></li>
            </ul>
        </div>
        
    </div>
    <div class="footerBottom">
        <p>&copy; 2024 IMA Media Networks, a division of IMA Global Inc. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>