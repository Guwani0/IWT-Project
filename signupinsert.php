<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // linking the connection of database php
    require 'configure.php';

    if(isset($_POST))
    {
    // $_POST use as the form method, values taken into new variable, [goes the name of the inputs]
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email =$_POST["email"];
    $number = $_POST['pnumber'];
    $birth = $_POST['dob'];
    $cont = $_POST['country'];
    $userPassword =$_POST["uPassword"];
    $reuserPassword =$_POST["reUpassword"];

    if($userPassword == $reuserPassword)
        {
            $query = "INSERT INTO registered_user (First_Name, Last_Name, Email, Contact_No, DOB, Country, U_password ) VALUES(' $firstName', '$lastName', '$number','$birth','$cont','$userPassword')";
            //mysqli_query($con, $query);
            echo "<script> alert('Registration Successful'); </script>";
            header("Location: postlogin.php");   
        }
        else
        {
            echo "<script> alert('Passwords do not match! Please try again.'); window.history.back();</script>";
            exit();
        }
      }
        
} 
?>