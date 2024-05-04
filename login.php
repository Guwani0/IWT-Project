<?php
session_start();
require 'configure.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


if (isset($_POST['submit'])) {
    $userEmail = $_POST['useremail'];
    $userPassword = $_POST['userpassword'];

    // Prepare the SQL statement using a prepared statement
    // $stmt = $con->prepare("SELECT * FROM user WHERE Email = ?");
    $stmt = $con->prepare("SELECT * FROM user WHERE Email = '$userEmail' OR U_password = '$userPassword'");

    // Bind the parameter to the prepared statement
    // $stmt->bind_param("s", $userEmail);

    // Execute the prepared statement
    $stmt->execute();

    // Get the result of the query
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Fetch the first row
        $storedPassword = $row['U_password'];

        if ($userPassword === $storedPassword) {
            // Redirect to the homepage
            // $_SESSION['login'] = true;
            // $_SESSION['email'] = $row['Email'];
            echo "<script>alert('Wrong Password');</script>";
            header("Location: index.php");

            exit(); // Immediately exit after redirection
        } else {
            // $_SESSION['error'] = 'Wrong Password';
            echo
            "<script> alert('Wrong Password'); </script>";
            // header("Location: logincrud.php");
            exit(); // Ensure immediate exit after redirection
        }
    } else {
        // $_SESSION['error'] = 'User Not Registered';
        echo
        "<script> alert('User Not Registered'); </script>";
        // header("Location: logincrud.php");
        exit(); // Immediate exit after redirect
    }
} else {
    // $_SESSION['error'] = 'Incomplete form data.';
    echo
    "<script> alert('Incomplete form data.'); </script>";
    // header("Location:logincrud.php");
    exit;
}

$con->close(); // Close the connection
?>