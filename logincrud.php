<?php
session_start(); 

require 'configure.php';
if(isset($_POST['submit']))
{
  $email = $_POST['useremail'];
  $password = $_POST['password'];
  $result = mysqli_query($con, "SELECT * FROM registered_user WHERE Email = '$email' OR U_password = '$password'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0)  
  {
    if($password == $row['U_password'])
    {
      $_SESSION['login'] = true;
      $_SESSION['email'] = $row["Email"];
    //   echo "<script> alert('Login Successful'); </script>";  
      header("location: index.php");
      exit();
    }

    else{
      echo
      "<script> alert('Wrong Password'); </script>";
      header("location: logincrud.php");

    }
  }  
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
    header("location: logincrud.php");

  }

  
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login|IMA 2024</title>
</head>

<body>
  <form id="login" method="POST" autocomplete="on" action="login.php">
    <h1>
      <center>Login
    </h1><br>

    <button type="submit">User&nbsp;</button>
    <button type="submit">Admin</button> <br><br>

    <input type="text" id="email" name="useremail" placeholder="User Email">
    <input type="password" id="password" name="password" placeholder="User Password"><br><br>

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