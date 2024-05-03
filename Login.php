<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/loginstyles.css">
        <title>LOG IN | IMA</title>
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
    <?php include 'header.php'; ?>
    <body class="box">
         
        <h1 class="header" style="font-size: xxx-large;">LOG IN</h1>
        <div class="login-box">
            <form action="login.php" method="post">
                <label for="username">Username</label><br>
                <input type="text" name="Username"required><br>
                <label for="password">Password</label><br>
                <input type="password" name="Password" required><br>
                <div>
                    <a href="#" class="fp">Forgot password?</a> 
                </div>
                <br><br>
                <input type="submit" value="LOG IN">
                <p style="text-align: center;">Don't have an account?</p>
                <button class="btn"><a href="#" class="su">SIGN UP</a></button>
            </form>
        </div>
    </body>