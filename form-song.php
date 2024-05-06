<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/stylesjason.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" type="text/css" href="song.css">
    <title> Favorite Song </title>
    
</head>

<body>
<img src="images/logo.png" width="100px" style="margin-top:20px; margin-left:50px;">

<header class="header">

        <nav class="navbar">
        <a href="postlogin1.php">  Home </a> 
            <a href="Category.php"> IMA 2024 </a> 
            <a href="archives.php"> Archives </a> 
            <a href="gallery.php"> Gallery </a> 
            <a href="ima_story.php"> The IMA Story </a> 
            <a href="download.php"> Download The App </a> 
            <a href="contactus.php"> Contact Us </a> 
        </nav> 
</header>
    <div class="loop">
    <p class="live"><b>Pick your favourite now! Tune in LIVE Sunday, June 15th at 987 C PTV to see who wins!</b></p>
    <p class="live"><b>Pick your favourite now! Tune in LIVE Sunday, June 15th at 987 C PTV to see who wins!</b></p>
    <p class="live"><b>Pick your favourite now! Tune in LIVE Sunday, June 15th at 987 C PTV to see who wins!</b></p>
 

</div>
<br><br>
   
    <center><div><br> <fieldset class="line">
        <h2 class ="head"><b>FAVOURITE SONG</b></h2><br>
    
        <form method="POST" action="insert-song.php" onsubmit="return validateForm()">
           
            <div class="email">Email :  <input class="box" type="text" name="vemail" required></div><br><br>
            <div class="choose">Choose Your Favourite Superstar</div><br><br><input type="radio" id="grande" name="SONG" value="WE CANT BE FRIENDS - ARIANA GRANDE" class="radio"><br>
            <label class="label label-1" for="grande">WE CANT BE FRIENDS - ARIANA GRANDE</label><br><br>

            <input type="radio" id="carp" name="SONG" value="ESPRESSO - SABRINA CARPENTER"class="radio"><br>
            <label class="label label-2" for="carp">ESPRESSO - SABRINA CARPENTER</label><br><br>

            <input type="radio" id="puth" name="SONG" value="ATTENTION - CHARLIE PUTH"class="radio"><br>
            <label class="label label-3" for="puth">ATTENTION - CHARLIE PUTH</label><br><br>

            <div><input class="submit" type="submit"> <input class="reset" type="reset"></div> 
        </form>
    </fieldset></div></center>

    <script src="script.js"></script>
    <script>
                function validateForm(){
                    var radios = document.getElementsByName("SONG");
                    var formValid = false;

                    for(var i = 0; i < radios.length; i++){
                        if (radios[i].checked){
                            formValid = true;
                            break;
                        }
                    }
                    if(!formValid){
                        alert("Please choose a nominee");
                    }

                    return formValid;
                }
            </script>
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
</html>