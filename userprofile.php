<?php
session_start();
require 'configure.php';

// Debug output to check if the session is working
if (isset($_SESSION['Email'])) {
    echo "Session Email: " . $_SESSION['Email']; // Check if session variable is set
} else {
    echo "Session variable 'Email' is not set.";
}

// Check if the user is logged in
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['Email']; // Get email from session
$result = mysqli_query($con, "SELECT * FROM registered_user WHERE Email = '$email'");

if (!$result || mysqli_num_rows($result) == 0) {
    echo "<script>alert('User not found. Please log in again.'); window.location.href = 'login.php';</script>";
    exit(); // Stop further code execution
}

$row = mysqli_fetch_assoc($result); // Fetch user details
$firstName = $row['First_Name'];
$lastName = $row['Last_Name'];
$contactNo = $row['Contact_No'];
?>

<div class="content">
    <div class="profile">
        <table border='1'> <!-- Start the table -->
            <!-- Display user details -->
            <tr>
                <td>First Name:</td>
                <td><?php echo htmlspecialchars($firstName); ?></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><?php echo htmlspecialchars($lastName); ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo htmlspecialchars($email); ?></td>
            </tr>
            <tr>
                <td>Contact Number:</td>
                <td><?php echo htmlspecialchars($contactNo); ?></td>
            </tr>
        </table> <!-- End the table -->
    </div>
</div>
