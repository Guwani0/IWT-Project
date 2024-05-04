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

    <div class="all">
            <h1><p class="p1">Welcome</p></h1>
            <div class="box2">
                <p class="p2">User Dashboard</p>
                <button class="btn2">Profile</button><br>
                <button class="btn2">News</button><br>
                <button class="btn2">Notifications</button>
                <button id="btn1">Sign out</button>
                <script src="js/userdashboard.js"></script>
            </div>
    </div>
    </body>