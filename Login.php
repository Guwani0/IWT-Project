<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/loginstyles.css">
        <title>LOG IN | IMA</title>
    </head>
    <body>
         <?php include 'header.php'; ?>
        <h1 class="header" style="font-size: xxx-large;">LOG IN</h1>
        <div class="login-box">
            <form action="login.php" method="post">
                <label for="username">Username</label><br>
                <input type="text" required><br>
                <label for="password">Password</label><br>
                <input type="password" required><br>
                <div>
                    <a href="#" class="fp">Forgot password?</a> 
                </div>
                <br><br>
                <input type="submit" value="LOG IN">
                <p style="text-align: center;">Don't have an account?</p>
                <button class="btn"><a href="#">SIGN UP</a></button>
            </form>
        </div>
    </body>