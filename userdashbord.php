<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/userdashbord.css">
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
    </div> 
    </body>