<?php
  include 'configure.php';

  if(isset($_POST['submit'])){
    $EmployeeName=$_POST['username'];
    $Email=$_POST['email'];
    $EMPid=$_POST['idNumber'];
    $feedback=$_POST['comment'];
    
    $sql = "INSERT INTO feedback (username, email, idNumber,comment) VALUES ('$EmployeeName', '$Email','$EMPid','$feedback')";
    $result = mysqli_query($con, $sql);


    if($result){
        //echo "data inserted successfully";
       header('location:Feedbackdisplay.php');
     } else{
       die(mysqli_error($con));
     }
   }
 ?>


    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feedbackdel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> Feedback </title>
    <style>
        @font-face{
        font-family:Future;
        src: url('../fonts/future.ttf');
    }
    </style>
</head>
<body>
    <img src="images/Two.png" width="100px" style="margin-top:20px; margin-left:50px;">
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


    
    <main>
        <div class="feedback-container">
            <h1>Give us your valuable feedback</h1>
            <p>Your feedback is very important to us</p>
            
            
           <form method="POST">
    
           <label for="comment">Say something about our service</label><br>
                            <textarea id="paragraph" name="comment" rows="5" cols="50"> </textarea><br><br>
                           
            <p class="question">Do you want to share this  publicly?</p>
            <div class="radio-btns">
                <div class="one-btn">
                    <input type="radio" name="one" id="Yes" />
                    <lable for="Yes">Yes</lable>
                </div>
                
                    <div class="one-btn">
                        <input type="radio" name="one" id="No" />
                        <lable for="No">No</lable>
                    </div>
            </div>

            <div class ="info-field">
                <div class="name">
                    <lebel>
                        <input type="text" placeholder="W.P.S.fernando" name="nickName" />
                        <span>NickNmae</span>
                    </lebel>
                </div>          
            </div>

                <div class ="iDnum">
                    <lebel>
                        <input type="text" placeholder="it XXXXXXXXX " name="idNumber"/>
                        <span>Id number(will not be published)</span>
                     </lebel>
                <div>

                <div class ="email">
                    <lebel>
                        <input type="email" placeholder="it seems nicely and userfriendly" name="email"/>
                        <span>Email adress(will not be published)</span>
                 </lebel>

                </div>
        
              <div class="accept"> 
                    <input type ="radio" id="accept" />
                    <lebel for ="accept">I accept the <a href="#">Terms and condition</a></lebel>
                </div>
                <div class="center">
                    <input type="submit" name="submit" value="Submit">
                 </div>

           </form>
            </div>
</main>

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
        

    </footer>

    </body>
</html>