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