<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../IWT-Project/styles/demosanjana.css">
    <link rel="stylesheet" href="../IWT-Project/styles/nomcatread.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <title>View Nominee | IMA 2024</title>
</head>

<body>
    <div class="head">
    <img src="images/logo.png" width="100px">
    <h1>International Music Awards</h1>
</div>
<div class="main">
    <h2>Nominee List</h2>
<?php
    require 'configure.php';

    $sql="SELECT NID, nomineeName, nomineeCategory FROM nominees";

    $result=$con->query($sql);

    if($result->num_rows>0)
    {
       echo "<table>";
        echo "<tr><th>ID</th><th>Nominee Name</th><th>Nominee Category</th></tr>";
        while($row=$result->fetch_assoc())
        {
            echo "<tr><td>" . $row["NID"] . "</td><td>" . $row["nomineeName"] . "</td><td>".$row["nomineeCategory"]."</tr>";
        }
        echo "<table>";
    }
    else{
        echo "No results";
    }
?>

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
        </div>
        
    </div>
    <div class="footerBottom">
        <p>&copy; 2024 IMA Media Networks, a division of IMA Global Inc. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>