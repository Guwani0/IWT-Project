<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // linking the connection of database php
    require 'configure.php';

    // $_POST use as the form method, values taken into new variable, [goes the name of the inputs]
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email =$_POST["email"];
    $number = $_POST['pnumber'];
    $birth = $_POST['dob'];
    $cont = $_POST['country'];
    $userPassword =$_POST["uPassword"];
    $reuserPassword =$_POST["reUpassword"];

    if ($userPassword !== $reuserPassword) {
        // Passwords do not match
        echo "<script> alert('Passwords do not match! Please try again.'); window.history.back();</script>";;
        exit();
    }

    // Hash the password with a secure hashing function
    $hashedPassword = password_hash($userPassword, PASSWORD_BCRYPT);

    //execute query
    if($con->connect_error)
    {
        echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }
    else
    {
        //execute query
        $stmt = $con->prepare("INSERT INTO user (Email, First_Name, Last_Name, Contact_No, DOB, Country, U_password ) VALUES(?, ?, ?, ?, ?, ?,?)");
        $stmt->bind_param("sssssss", $email, $firstName, $lastName, $number, $birth, $cont, $userPassword);
        $execval = $stmt->execute();
		echo $execval;
        header("Location: index.php");
		exit();
		$stmt->close();
        $con-> close();
    }
      
?>
