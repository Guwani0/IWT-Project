<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <title> IMA|Log In </title>
</head>
<form action="login.php" method="post">
    <input type="text" name="useremail" placeholder="User Email" required><br><br>
    <input type="password" name="userpassword" placeholder="User Password" required><br>
    <div>
        <a href="#" class="fp">Forgot password?</a>
    </div>
    <br><br>
    <!-- <input type="submit" value="LOG IN"> -->
 <!--   <button type="submit" name="submit">LOGIN</button>
    <p style="text-align: center;">Don't have an account?</p>
    <button class="btn"><a href="#" class="su">SIGN UP</a></button>
</form>
</div>
</body>

</html>

 -->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <!-- <link rel="stylesheet" href="./css/auth_style.css"> -->

  <style media="screen">

  </style>
</head>

<body>
  <form id="login" method="POST" autocomplete="on" action="login.php">
    <h1>
      <center>Login
    </h1><br>
    <center><button type="submit">User&nbsp;</button>
      <button type="submit">Publisher</button>
    </center><br><br>
    <lable>Email</lable>
    <input type="text" id="email" name="useremail">
    <lable>Password</lable>
    <input type="text" id="password" name="password"><br><br>

    <p><input type="checkbox" id="rememberme" name="rememberme">
      Remember me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="kofie">Forgot password?</a></p><br>
    <center><button type="submit" name="submit">LOGIN</button>
      <center>
        <h5>
          <center>Don't have an account?&nbsp;<a href="./register.php">sign up</a>
        </h5>
  </form>
</body>

</html>