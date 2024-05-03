<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <title> IMA|Sign Up </title>
</head>
<body>
    <form method="post" action="signupinsert.php" onsubmit="return validatePasswords();">
    Username : <input type="text" name="uName"> <br> <br> 
    Email : <input type="email" name="uEmail"> <br> <br>
    Password : <input type="password" name="uPassword"> <br> <br>
    Re-type password : <input type="password" name="reUpassword"> <br><br>

    <input type="submit" value="SIGN UP"> <br> <br>

    Already have an account? <br> <br>
    <button> LOG IN </button>
    </form>

    <div id="errorMessage" style="color:red";></div>
    </body>
</html>
