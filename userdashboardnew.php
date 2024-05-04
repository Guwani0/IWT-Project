<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/userdashboardnew.css">
        <title>User Dashbord | IMA</title>
        <style>body {
    background-image: url('../IWT-Project/images/back.png');
    background-color:black;
    background-size:cover; 
    background-position:center;
    background-repeat:no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
    overflow-y: auto;
}
</style>
    </head>
    <body>
    <?php include 'header.php'; ?>
    <div class="containerC">
        <div class="left">
            <div class="box1">
                <div class="subleft1"><img src="images/userimg.png" alt="user pic" class="img1"></div>
                <div class="subright1"><p>username<br>
                <button id="btn1">Sign Out</button></p></div>
                <script src="js/userdashboard.js"></script>
                <p class="p1"><b>Welcome</b></p>
            </div>
            <div class="box2">
                <p class="p2">User Dashboard</p>
                <button class="btn2">Profile</button><br>
                <button class="btn2">News</button><br>
                <button class="btn2">Notifications</button>
            </div>
        </div>
        <div class="right">
            <div class="gallery-wrap">
                <img src="images/left key.png" alt="left key" id="backBtn">
                <div class="gallery">
            <div>
                <span><img src="images/sp1.png" alt="sp1"></span>
                <span><img src="images/sp2.jpeg" alt="sp2"></span>
            </div>
            <div>
                <span><img src="images/sp3.png" alt="sp3"></span>
                <span><img src="images/sp4.png" alt="sp4"></span>
            </div>
            <div>
                <span><img src="images/sp5.png" alt="sp5"></span>
                <span><img src="images/sp6.png" alt="sp6"></span>
            </div>
            </div>
                <img src="images/right key.png" alt="right key" id="nextBtn">
            </div>
    </div> 
    </body>