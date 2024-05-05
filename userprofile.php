<?php
require 'configure.php';
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" type="text/css" href="styles/profile.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Profile</title>
 
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
    <h1>Profile</h1>

   <div class="container">
   
    <div class="profile">

      <?php
      $sql = "select * from registered_user ;";
      $result = mysqli_query( $con,$sql);
      while ($row = mysqli_fetch_array($result)) {
        $ID = $row['ID'];
        $FirstName = $row['First_Name'];
        $LastName = $row['Last_Name'];
        $Email = $row['Email'];
        $ContactNumber = $row['Contact_No'];
    ?>
       <span id="result-FirstName" ><h4> First Name       : </h4></span><?php echo $FirstName;?><br><br>
       <span id="result-LastName" ><h4> Last Name      :</h4></span><?php echo $LastName;?><br><br>
       <span id="result-email" > <h4> Email             : </h4></span><?php echo $Email;?><br><br> 
        <span id="result-phoneNumber" ><h4> Contact Number :</h4></span><?php echo $ContactNumber;?><br><br>
      
  </div><br>

  <!--<button><h3><a href="settings page.html">Edit profile</a></h3></button>-->

  <a href="settings page.php"><input class="button1" type="submit" name="updateProfile" value="Update Profile"></a>
  <!--<button><h3><a href="delete.php?deleteemail=' . $Email . '">Delete Account</a></h3></button>-->

 <a href="delete.html"><input class="button1" type="submit" name="deleteProfile" value="Delete Profile"></a>
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
                <li><a href=""> FAQ </a></li>
            </ul>
        </div>
        
    </div>
    <div class="footerBottom">
        <p>&copy; 2024 IMA Media Networks, a division of IMA Global Inc. All Rights Reserved.</p>
    </div>
</footer>

</body>
<?php
}
?>

   
  
</html>
