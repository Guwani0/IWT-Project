<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../IWT-Project/styles/demosanjana.css">
    <link rel="stylesheet" href="../IWT-Project/styles/nomcatcrud.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <title>Edit Category | IMA 2024</title>
</head>
<body>
<div class="head">
<img src="images/logo.png" width="100px">
<h1>International Music Awards</h1>
</div>  
    <main>
        <div class="box">
    <h2>Update Category</h2>
    <form action="updatecategoryCon.php" method="post" class="categoryupdate">
        <label for="categoryID">Category ID:</label><br>
        <input type="text" class="categoryID" name="categoryID" placeholder="Enter Category ID" required><br><br>
        <label for="categoryName">Category Name:</label><br>
        <input type="text" class="categoryName" name="categoryName" placeholder="Enter New Category" required><br><br> 
        <input type="submit" value="Update Category">
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
    </div>
</footer>
</body>
</html>