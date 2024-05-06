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
h1{
  text-align:center;
  color:darkorange;
}

.btn1{
    border: orange;
    color: black;
    margin-left: 135px;
    border-radius: 7px;
    border-style: groove;
    height: 30px;
    width: 90px;
    background-color:darkorange;

}
.btn:hover {
background-color: black;
color:darkorange;
}

.box2{
    padding: 5px;
    box-shadow: 0px 20px 35px rgba(236, 236, 238, 0.9);
    border-radius: 7px;
    /*background-color: rgba(255, 217, 0, 0.527);*/
    background-color: black;
    border: 2px solid black;
    width: 350px;
    margin-top: 110px;
    margin: auto;
    
}

.p1{
    color: white;
    text-align: center;
    font-size: x-large;
}
.btn2{
    padding: 10px;
    margin: 10px 0 10px 0;
    width: 350px;
    border-radius: 8px;
    height: 50px;
    background-color: darkorange;
    color:white;
}
</style>
    </head>

    <body>
    <img src="images/logo.png" width="100px" style="margin-top:20px; margin-left:580px;">
    <br>
    <h1>International Music Awards</h1>
    <div class="all">
            
            <div class="box2">
                <p class="p1">Admin Dashboard</p>
                <button class="btn2">Profile</button><br>
                <button class="btn2">Manage Categories</button><br>
                <button class="btn2">Manage Nominees</button>
                <button class="btn1">Sign out</button>
                <script src="js/userdashboard.js"></script>
            </div>
    </div>
    </body>
</html>

