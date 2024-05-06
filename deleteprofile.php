<?php
require 'configure.php';
session_start();

if (!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($con, "SELECT * FROM registered_user WHERE ID = '$sessionid'");
    $row = mysqli_fetch_assoc($result);
}
    $id = $row['ID'];

if (isset($_POST['submit'])) {
    $sql = "DELETE FROM registered_user WHERE ID=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Deleted Successfull";
        header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" href="styles/deleteprof.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Delete Profile| IMA 2024</title>
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
            <a href="#"> Home </a>
            <a href="#"> IMA 2024 </a>
            <a href="#"> Archives </a>
            <a href="#"> Gallery </a>
            <a href="#"> The IMA Story </a>
            <a href="#"> Download The App </a>
            <a href="#"> Contact Us </a>
        </nav>
    </header>
    
    <div class="container">
    <h1 class="header1" style="font-size: xxx-large;"> Delete Profile </h1>   
    <h1> Are you sure you want to delete your profile? </h1>

    <form method="post">
    <input class="button1" type="submit" name="submit" value="Delete Profile" id="delete">
    </form>
    </div>

    <!-- <a href="editprofile.php"> <input class="button1" type="submit" name="editProfile" value="Edit Profile"></a>
    <a href="deleteprofile.php"> <input class="button1" type="submit" name="deleteProfile" value="Delete Profile"></a> -->
    <br><br><br><br><br><br><br><br><br><br>
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

</body>

