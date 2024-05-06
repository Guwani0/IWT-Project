<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/stylesjason.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="UpDel.css">
   
    <title>Update Vote</title>
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

    <center><fieldset class="line">
    <center><h2 class="Head">Update Vote</h2> </center>
    <br><br>
    <form action="updateGroup.php" method="POST" class="update">
        
            
            <div class="email">Email :  <input class="box" type="text" name="vemail" required></div><br><br>

            <div class="choose">Choose Your Favourite Superstar</div><br><br><input type="radio" id="bts" name="GROUP" value="BTS" class="radio">
            <label class="label" for="bts">BTS</label><br><br>

            <input type="radio" id="blackpink" name="GROUP" value="BLACKPINK"class="radio">
            <label class="label" for="blackpink">BLACKPINK</label><br><br>

            <input type="radio" id="maroon" name="GROUP" value="MAROON 5"class="radio">
            <label class="label" for="maroon">MAROON 5</label><br><br>



            <center><div><input class="submit" type="submit" value="UPDATE"></div></center>
    </form>
</fieldset></center>

    <footer>
    <br><br><br><br><br><br><br><br><br><br>   
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