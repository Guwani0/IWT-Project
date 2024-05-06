<?php
require 'configure.php';
session_start();
if(!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($con, "SELECT * FROM contact WHERE ID = '$sessionid'");
    $row = mysqli_fetch_assoc($result);
}

$id=$row['ID'];
$sql="SELECT * from `contact` where ID=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$name=$row['Name'];
$email=$row['Email'];
$subject=$row['Subject'];
$message=$row['Message'];

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql="update contact set id=$id, name='$name', email='$email', subject='$subject', message='$message' where id=$id";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script> alert('Updated Successfully'); </script>";
        header('location:contactus.php');
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <title>Crud Operation enter</title>
</head>
<body>
    <div class="container my-5">
        <form method="post">
       
        <div class="form-group">
            <label>Neme</label><br>
            <input type="text" class="form-control" placeholder="Your Name" 
            name="name" value=<?php echo $name;?>><br>
        </div>

        <div class="form-group">
            <label>E-mail</label><br>
            <input type="text" class="form-control" placeholder="E-mail" 
            name="email" value=<?php echo $email;?>><br>
        </div>

        <div class="form-group">
            <labe>Mobile</label><br>
            <input type="text" class="form-control" placeholder="Subject" 
            name="subject" value=<?php echo $subject;?>><br>
        </div>

        <div class="form-group">
            <label>Password</label><br>
            <input type="text" class="form-control" placeholder="Message" 
            name="message" value=<?php echo $message;?>><br>
        </div>
            
        <br><br><button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>

<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/contactusread.css">
        <link rel="stylesheet" href="styles/demoamath.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <title> Contact Us | IMA 2024</title>
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
    <h1><p class="p1">How can we Help?</p></h1>
    <div class="sqr">
                    <div><p class="p3">Couldn't find an answer to your problem?<br><br>
                    Don't let obstacles hold your business back. Reach out to us today and let our online voting system be the solution to your problems. 
                    We are eager to assist you and provide you a better user experience.</p></div>
                <form method="post" action="inquiry.php">
                <label for="name">Name</label><br>
                <input type="text" name="name" required><br>
                <label for="email">Email</label><br>
                <input type="text" name="email" required><br>
                <label for="subject">Subject</label><br>
                <input type="text" name="subject" required><br>
                <label for="message">Message</label><br>
                <textarea id="message" name="message" rows="4"></textarea> <br>
                <input type="submit" value="Sumbit">
            </form>
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
    </html>-->