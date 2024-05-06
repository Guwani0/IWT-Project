<?php 
  include 'configure.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/myfeedback21.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> Feedback display  </title>
    <style>
        @font-face{
        font-family:Future;
        src: url('../fonts/future.ttf');
    }
    </style>
</head>
<body>

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

<button class="but">
      <a href="feedback.php">Add a new commment</a>
    </button>

    <div class="tab">
    <table >
      <thead>
        <tr>
          <th>user_id</th>
          <th>user_name</th>
          <th>user_feedbacks</th>
        </tr>
      </thead>
        <?php
          $sql = "SELECT * FROM feedback";
          $result = mysqli_query($con, $sql);
          
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $idNUM=$row["idNumber"];
                $userName = $row["username"]; 
                $comment = $row["comment"];
            
                echo ' <tr> 
                            <td>'.$idNUM.'</td>
                            <td>'.$userName.'</td>
                            <td>'.$comment.'</td>
                            <td> 
                            <button onclick="update()"><a href="Feedbackupdate.php?updateid='.$idNUM.'">Update</a></button>
                            <button onclick="del()" class="delete"><a href="Feedbackdelete.php?deleteid='.$idNUM.'">Delete</a></button>
                        </td>
                    </tr>';
                 
            }
          }
        
        ?>
        
      </tbody>
    </table>
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
      <ul><li><a href="postlogin1.php">Home</a></li>
                <li><a href="download.php"> Download The App</a></li>
                <li><a href="ima_story.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="FAQ.php"> FAQ </a></li>
            </ul>
          </ul>
      </div>
      
  </div>

    <div class="footerBottom">
        <p>&copy; 2024 IMA Media Networks, a division of IMA Global Inc. All Rights Reserved.</p>
    </div>
</footer>
        </body>
        </body>
</html>

     