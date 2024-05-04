<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require 'configure.php';

if (isset($_POST['submit']) && !empty($_POST['useremail']) && !empty($_POST['userpassword'])) {
    $userEmail = $_POST['useremail'];
    $userPassword = $_POST['userpassword'];

    // Prepare the SQL statement using a prepared statement
    $stmt = $con->prepare("SELECT * FROM user WHERE Email = ?");

    // Bind the parameter to the prepared statement
    $stmt->bind_param("s", $userEmail);

    // Execute the prepared statement
    $stmt->execute();

    // Get the result of the query
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Fetch the first row
        $storedPassword = $row['U_password'];

        if ($userPassword === $storedPassword) {
            // Redirect to the homepage
            $_SESSION['login'] = true;
            $_SESSION['email'] = $row['Email'];
            header("Location: index.php");
            exit(); // Immediately exit after redirection
        } else {
            $_SESSION['error'] = 'Wrong Password';
            header("Location: login crud.php");
            "<script> alert('Wrong Password'); </script>";
            exit(); // Ensure immediate exit after redirection
        }
    } else {
        $_SESSION['error'] = 'User Not Registered';
        header("Location: login crud.php");
        "<script> alert('User Not Registered'); </script>";
        exit(); // Immediate exit after redirect
    }
} else {
    $_SESSION['error'] = 'Incomplete form data.';
    header("Location: login crud.php");
    "<script> alert('Incomplete form data.'); </script>";
    exit;
}

$con->close(); // Close the connection
?>