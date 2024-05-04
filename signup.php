<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <title> IMA|Sign Up </title>
</head>
<body>
    <form method="post" action="signupinsert.php">
    <input type="text" name="fname" placeholder="First Name" required> <br> <br> 
    <input type="text" name="lname" placeholder="Last Name" required> <br> <br> 
    <input type="email" name="email" placeholder="Email" required> <br> <br>
    <input type="text" name="pnumber" placeholder="Contact Number" required><br> <br>
    <input type="date" name="dob" placeholder="Date of Birth" required> <br> <br>
    <input type="text" name="country" placeholder="Country" required> <br> <br>
    <input type="password" name="uPassword" placeholder="Password" required> <br> <br>
    <input type="password" name="reUpassword" placeholder="Confirm Password" required> <br><br>
   
    <input type="submit" value="SIGN UP"> <br> <br>

    Already have an account? <br> <br>
    <button> LOG IN </button>
    </form>

    </body>
</html>
