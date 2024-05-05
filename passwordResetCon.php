<?php

include 'configure.php';

function updatePassword($email, $newPassword) {
    
    // Sanitize input to prevent SQL injection
    $email = $conn->real_escape_string($email);
    $newPassword = $conn->real_escape_string($newPassword);

    // Hash the new password before storing it
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Update password in the database
    $sql = "UPDATE users SET password = '$hashedPassword' WHERE email = '$email'";

    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully!";
    } else {
        echo "Error updating password: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

// Example usage
$email = "user@example.com";
$newPassword = "newPassword123";

updatePassword($email, $newPassword);

?>