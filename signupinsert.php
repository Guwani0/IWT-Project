<?php

    // linking the connection of database php
    require 'configure.php';

    // $_POST use as the form method, values taken into new variable, [goes the name of the inputs]
    $userName = $_POST["uName"];
    $userEmail =$_POST["uEmail"];
    $userPassword =$_POST["uPassword"];
    $reuserPassword =$_POST["reUpassword"];

    if ($userPassword !== $reuserPassword) {
        // Passwords do not match
        echo "<script> alert('Passwords do not match! Please try again.'); window.history.back();</script>";;
        exit();
    }

    // Hash the password with a secure hashing function
    $hashedPassword = password_hash($userPassword, PASSWORD_BCRYPT);

    //data insert query
    $sql= "INSERT INTO user VALUES('$userName','$userEmail' , '$userPassword')";
  
    //execute query
    if($con-> query ($sql))
    {
        //redirect to homepage
        header("Location: index.php");
        exit;
    }
    else{
        echo "Error".$con->error;
    }

    //close the connection
    $con-> close();
?>