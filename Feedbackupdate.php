<?php
  include 'configure.php';



  if(isset($_GET['updateid'])){
    $update_id=$_GET['updateid'];
  $sql = "SELECT * FROM feedback WHERE idNumber=$update_id";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);


 $EMPid = $row["idNumber"];
 $EMPname = $row["username"]; 
 $comment = $row["comment"];

 if(isset($_POST['submit'])){

    $comment = $_POST["comment"];
    
    $EMPname = $_POST["username"];

    $EMPid=$_POST["idNumber"];


    
    $sql = "UPDATE feedback SET  comment='$comment', username='$EMPname' WHERE idNumber='$update_id'";
    $result = mysqli_query($con, $sql);

    if($result){
      // echo "data updated successfully";
      header('location:Feedbackdisplay.php');
    }

     else{
      die(mysqli_error($con));
    }
}
}

?>


<!DOCTYPE html>
<html>
    <head>
     <link rel="stylesheet" href="styles/myfeedback1.css">
     <script src="feedback.js"></script>
     <meta charset="UTF=8" />
     <meta http-eqviv="X-UA-Copatible" content="IE=edgs"/>
     <meta name ="Viewport" content="width=devise-width,intial-scale=1.0" />
     <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
     <title>feedback System</title>
    </head>
    <body>
        <div class="feedback-container">
            <h1>Give us your valuable feedback</h1>
            <p>Your feedback is very important to us</p>
            <div class="emoji-box">
                <button class="btn normal">&#128578;</button>
                <button class="btn normal">&#128515;</button>
                <button class="btn normal">&#128519;</button>
                <button class="btn normal">&#128531;</button>
                <button class="btn normal">&#128532;</button>
                <button class="btn normal">&#128545;</button>
            </div>
            
           <form method="POST">
           
           <label for="comment">Say something about our service</label><br>
                            <textarea id="paragraph" name="comment" rows="5" cols="50"></textarea><br><br>
                           
            
            <div class ="info-field">
                <div class="name">
                    <lebel>
                        <input type="text" placeholder="W.P.S.fernando" name="username"  />
                        <span>NickNmae</span>
                    </lebel>
                </div>

                <div class ="iDnum">
            <lebel>
                <input type="text" placeholder="it XXXXXXXXX " name="idNumber"/>
                <span>Id number(will not be published)</span>
            </lebel>
         <div class ="email">
            <lebel>
                <input type="email" placeholder="it seems nicely and userfriendly" name="email"/>
                <span>Email adress(will not be published)</span>
            </lebel>

           </div>
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


    </body>
</html>