<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" type="text/css" href="styles/indexstyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> IMA|2024 </title>
</head>

<body>
 
    <?php
    session_start();
    require 'configure.php';
    if(!empty($_SESSION['email'])){
        $email = $_SESSION["email"];
        $result = mysqli_query($con, "SELECT * FROM user WHERE Email = '$email'");
        $row = mysqli_fetch_assoc($result);
    }
    // else{
    //     header("location: login.php");
    //     exit();
    // }
    ?>
    <header class="header">

        <nav class="navbar">
            <a href="#">  Home </a> 
            <a href="#"> IMA 2024 </a> 
            <a href="#"> Archives </a> 
            <a href="#"> Gallery </a> 
            <a href="#"> The IMA Story </a> 
            <a href="#"> Download The App </a> 
            <a href="#"> Contact Us </a> 
            <div class="logsign">
                <a href="logincrud.php"> Login </a> 
                <a href="signup.php"> SignUp </a> 
            </div>
        </nav>
    </header>

    <div class="ima">
        <img src="images/ima.png">
    </div>
    <div class="awardimg">
        <img src="images/trophy.png" width="80px">     
    </div>    
    <div class="container">
    <div class="slide">

            <div class="item" style= "background-image: url(images/imageslide1.jpg);"> 
                <div class="content">
                    <div class="name"> Award Winning <br> Moments </div>
                </div>
            </div>

            <div class="item" style= "background-image: url(images/imageslide2.jpg);"> 
                <div class="content">
                    <div class="name"> Performance <br> Highlights </div>
                </div>
            </div>

            <div class="item" style= "background-image: url(images/imageslide3.jpg);"> 
                <div class="content">
                    <div class="name"> Award Winning <br> Moments </div>
                </div>
            </div>

            <div class="item" style= "background-image: url(images/imageslide4.jpg);"> 
                <div class="content">
                    <div class="name"> Award Winning <br> Moments </div>
                </div>
            </div>

            <div class="item" style= "background-image: url(images/imageslide5.jpg);"> 
            <div class="content">
            <div class="name"> Performance <br> Highlights </div>
            </div>
            </div>
        
    </div>

    <div class="button">
        <button class="prev"> <i class="fa-solid fa-arrow-left"></i></button>
        <button class="next"> <i class="fa-solid fa-arrow-right"></i></button>
    </div>

    <script src="js/slide.js"></script> 
    <br> <br> <br> <br>

    <div class="space">
        <div class="text">
            <h1 data-text="IMA 2024">IMA 2024</h1>
        </div>
        <h1>Who deserves the best?</h1> <br>
        <h3 style="font-family: Arial, Helvetica, sans-serif;"> You decide! Join us to vote! </h3> 

        <button class="btn"> 
            <a href="signup.php"> Create Account </a> 
        </button>
    </div>
</body>
</html>